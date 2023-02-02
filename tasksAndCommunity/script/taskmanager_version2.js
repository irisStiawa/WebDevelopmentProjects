const elements = document.querySelectorAll('*[id]');
let elemObj = {};

const show = document.querySelectorAll(".show");
const done = document.querySelectorAll('.done');
const edit = document.querySelectorAll('.edit');
const deletes = document.querySelectorAll('.delete');

const arrElemShow = ['#showType', '#showName', '#showDate', 
'#showReminder', '#showNote', '#editBtn', '#showImage', '#showDone'];
const arrElementsEdit=['#edithigh', '#editmedium', '#editlow', '#editnone', '#edittaskname', '#edittaskdate', '#edittaskreminder', '#edittasknote', '#edithome', '#editwork', '#editprivate', '#edittaskID'];
const arrElemEdit = ['#high', '#medium', '#low', '#none'];

doVariables(elements);

function doVariables(elements){
    for(element of elements){
        elemObj[element.id] = element;
    }
}

let showingElem = doarray(arrElemShow)
let editingElem = doarray(arrElementsEdit)


function doarray(arr){
    let setarr = [];
    for(elem of arr){
        let getElem = document.querySelector(elem);
        setarr.push(getElem);
    }
    return setarr;
}

async function fetchTaskData() {
    let result = await fetch('data/taskData.php')
        .then(response => response.json())
        .then(res => {return res;})
    return result;
}

async function sendFormData(key, value){
    let formData = new FormData();
    formData.append(key, value);
    let result = await fetch('data/updateData.php', {method: 'POST', body: formData})
        .then(response => response.text())
        .then(res => {return res;})  
    return result;
}

function showpopup(eventforPop, pop){
    eventforPop.addEventListener('click', () => {
        if(pop.classList.contains("hidden")){
            pop.classList.remove("hidden");
            pop.classList.add("d-flex");
        }
    })
}

function closePopup(eventforClose, close){
    eventforClose.addEventListener('click', () => {
        if(close.classList.contains("d-flex")){
            close.classList.remove("d-flex");
            close.classList.add("hidden");
        }
    })
}

elemObj.formAddTask.addEventListener('submit', function (e) {
    if(!elemObj.formAddTask.checkValidity()) {
        e.preventDefault()
        e.stopPropagation()
    }
    elemObj.formAddTask.classList.add('was-validated');
}, false)

elemObj.formEditTask.addEventListener('submit', function (e) {
    if(!elemObj.formEditTask.checkValidity()) {
        e.preventDefault()
        e.stopPropagation()
    }
    elemObj.formEditTask.classList.add('was-validated');
}, false)

for(elem of show){
    showpopup(elem, elemObj.showtask);
    elem.addEventListener('click', async (e)=>{
        let resforShow = await fetchTaskData();
        for(elem of resforShow){
            if(elem.taskID == e.target.id){
                showTask(elem);
            }
        }
    })
}

function showTask(task){      
    showingElem[0].innerHTML= task.tasktype;
    showingElem[1].innerHTML= task.taskname;
    showingElem[2].innerHTML= task.taskdate;
    showingElem[3].innerHTML= task.reminder;
    showingElem[4].innerHTML= task.tasknote;
    showingElem[5].setAttribute('taskID', task.taskID);
    showingElem[6].setAttribute('src', 'img/projectImages/'+ task.taskpriority + '.png');

    
    if(task.done == true){
        if(showingElem[7].classList.contains('notdone')){
            showingElem[7].classList.remove('notdone');
            showingElem[7].classList.add('isdone');
        }
        if(!editBtn.classList.contains('hidden')){
            editBtn.classList.add('hidden');
        }
    } else{
        if(showingElem[7].classList.contains('isdone')){
            showingElem[7].classList.remove('isdone');
            showingElem[7].classList.add('notdone');
        }
        if(editBtn.classList.contains('hidden')){
            editBtn.classList.remove('hidden');
        }
    }
}

// done tasks style

for(elem of done){
    elem.addEventListener('click', async (e) =>{
        let result = await sendFormData('idForDone', e.target.id)
        if(result == true){
            e.target.classList.add('isdone');

            let parentForDone = e.target.parentElement;
            let editForDone = parentForDone.querySelector('.edit');
            console.log(editForDone)

            try {
                editForDone.removeEventListener('click', showpopup)
            } catch (error) {
                console.error(error);
                
            }
            editForDone.ownerDocument.defaultView.__VUE_DEVTOOLS_TOAST.length = 0;
            

            editForDone.style.opacity = '0.5';
            }
        
    })
}

// delete tasks
for(elem of deletes){
    elem.addEventListener('click', async (e) => {
        let result = await sendFormData('idForDelete', e.target.id)
        if(result == true){
            let parent = e.target.parentElement.parentElement;        
            parent.remove(); 
        } 
    })        
}  

// active and done tasks view

elemObj.btnActiveTask.addEventListener('click', () => {
    if(elemObj.btnDoneTask.classList.contains('active')){
        elemObj.btnDoneTask.classList.remove('active');
    }

    if(!elemObj.btnActiveTask.classList.contains('active')){
        elemObj.btnActiveTask.classList.add('active');
    }   
})

elemObj.btnDoneTask.addEventListener('click', () => {
    if(elemObj.btnActiveTask.classList.contains('active')){
        elemObj.btnActiveTask.classList.remove('active');
    }

    if(!elemObj.btnDoneTask.classList.contains('active')){
        elemObj.btnDoneTask.classList.add('active');
    }
})

async function stylesEdit(){
    let toEdit = [];
    let resforEdit = await fetchTaskData();
    for(elem of edit){
        for(task in resforEdit){
            if(elem.id == resforEdit[task].taskID && resforEdit[task].done != true){
                toEdit.push(elem);
            } else if (elem.id == resforEdit[task].taskID && resforEdit[task].done == true){
                elem.style.opacity = "0.5";
            }
        }
    }
    return toEdit;
}

// edit task

async function forEdit(){
    let editIcons = await stylesEdit();
    for(elem of editIcons){
        showpopup(elem, elemObj.edittask);
        elem.addEventListener('click', async (e)=>{
            let id = e.target.id;
            let resforEdit = await fetchTaskData();
            for(elem of resforEdit){
                if(elem.taskID == id){
                    editTask(elem);
                }
            }
        })
    }
}



elemObj.editBtn.addEventListener('click', async (e)=>{
    let id = e.target.getAttribute('taskID');
    let resforEdit = await fetchTaskData();
        for(elem of resforEdit){
            if(elem.taskID == id){
                editTask(elem);
            }
        }
    })

function editTask(task){
    if(task.taskpriority == 'high'){
        editingElem[0].setAttribute('checked', 'checked');
    } else if(task.taskpriority == 'medium'){
        editingElem[1].setAttribute('checked', 'checked');
    } else if(task.taskpriority == 'low'){
        editingElem[2].setAttribute('checked', 'checked');
    } else{
        editingElem[3].setAttribute('checked', 'checked');
    }
    editingElem[4].value = task.taskname;
    editingElem[5].value = task.taskdate;
    editingElem[6].value = task.reminder;
    editingElem[7].value = task.tasknote;

    if(task.tasktype == 'home'){
        editingElem[8].setAttribute('checked', 'checked');
    } else if(task.tasktype == 'work'){
        editingElem[9].setAttribute('checked', 'checked');
    } else {
        editingElem[10].setAttribute('checked', 'checked');
    }
    editingElem[11].value = task.taskID;
}
        
showpopup(elemObj.btnAddTask, elemObj.addtask);
closePopup(elemObj.closeaddtask, elemObj.addtask);
closePopup(elemObj.closeshowtask, elemObj.showtask);
closePopup(elemObj.closeedittask, elemObj.edittask);
showpopup(elemObj.editBtn, elemObj.edittask);
closePopup(elemObj.editBtn, elemObj.showtask);
// closePopup(editBtn)
forEdit();
