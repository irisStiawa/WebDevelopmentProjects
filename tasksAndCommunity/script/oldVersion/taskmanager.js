const btnAddTask = document.querySelector('#btnAddTask');
const addtask = document.querySelector("#addtask");
const closeaddtask = document.querySelector('#closeaddtask');
const formAddTask=document.querySelector('#formAddTask');
const show = document.querySelectorAll(".show");
const arrElemShow = ['#show-type', '#show-name', '#show-date', 
'#show-reminder', '#show-note', '#btn-edit', '#show-image', '#show-done'];
const arrElementsEdit=['#edithigh', '#editmedium', '#editlow', '#editnone', '#edittaskname', '#edittaskdate', '#edittaskreminder', '#edittasknote', '#edithome', '#editwork', '#editprivate'];
const btnActiveTask = document.querySelector('#activetasks');
const btnDoneTask = document.querySelector('#donetasks');
let showingElem = [];
let editingElem = [];
const showtask = document.querySelector('#showtask');
const closeshowtask= document.querySelector('#closeshowtask');
const done = document.querySelectorAll('.done');
const edit = document.querySelectorAll('.edit');
const arrElemEdit = ['#high', '#medium', '#low', '#none']
let editElem = [];
const edittask = document.querySelector('#edittask');
const deletes = document.querySelectorAll('.delete');

for(elem of arrElemShow){
    let getElem = document.querySelector(elem);
    showingElem.push(getElem);
}

for (elem of arrElementsEdit){
    let getElem = document.querySelector(elem);
    editingElem.push(getElem);
}



btnAddTask.addEventListener('click', () => {
    if(addtask.classList.contains("hidden")){
        addtask.classList.remove("hidden");
        addtask.classList.add("d-flex");
    }
})

closeaddtask.addEventListener('click', () => {
    if(addtask.classList.contains("d-flex")){
        addtask.classList.remove("d-flex");
        addtask.classList.add("hidden");
    }
})

formAddTask.addEventListener('submit', function (e) {
    if(!formAddTask.checkValidity()) {
        e.preventDefault()
        e.stopPropagation()
      }

      formAddTask.classList.add('was-validated');
      }, false)

for(elem of show){
    elem.addEventListener('click', (e)=>{
        let id = e.target.id;

        fetch('data/taskData.php')
            .then(res => res.json())
            .then(result => {
                for(elem in result){
                    if(result[elem].taskID == id){
                        showingElem[0].innerHTML= result[elem].tasktype;
                        showingElem[1].innerHTML= result[elem].taskname;
                        showingElem[2].innerHTML= result[elem].taskdate;
                        showingElem[3].innerHTML= result[elem].reminder;
                        showingElem[4].innerHTML= result[elem].tasknote;
                        showingElem[5].setAttribute('taskID', id);
                        showingElem[6].setAttribute('src', 'img/'+ result[elem].taskpriority + '.png');
                        
                        if(result[elem].done == true){
                            if(showingElem[7].classList.contains('notdone')){
                                showingElem[7].classList.remove('notdone');
                                showingElem[7].classList.add('isdone');

                            } else{
                                if(showingElem[7].classList.contains('isdone')){
                                    showingElem[7].classList.remove('isdone');
                                    showingElem[7].classList.add('notdone');
                                }
                            }
                            
                            
                        }
                    }
                }
            })

            if(showtask.classList.contains("hidden")){
                showtask.classList.remove("hidden");
                showtask.classList.add("d-flex");
            }
    })
}

closeshowtask.addEventListener('click', () => {
    if(showtask.classList.contains("d-flex")){
        showtask.classList.remove("d-flex");
        showtask.classList.add("hidden");
    }
})

for(elem of done){
    elem.addEventListener('click', (e) =>{
        let formData = new FormData();
        formData.append('idForDone', e.target.id);
        fetch('data/updateData.php', {method: 'POST', body: formData})
            .then(res => res.json())
            .then(result => {
                if(result == 'done'){
                    e.target.classList.add('isdone');
                }
            })
    })
}

elem = undefined;
console.log(elem)
btnActiveTask.addEventListener('click', () => {
    if(btnDoneTask.classList.contains('active')){
        btnDoneTask.classList.remove('active');
    }

    if(!btnActiveTask.classList.contains('active')){
        btnActiveTask.classList.add('active');
    }

    
})

btnDoneTask.addEventListener('click', () => {
    if(btnActiveTask.classList.contains('active')){
        btnActiveTask.classList.remove('active');
    }

    if(!btnDoneTask.classList.contains('active')){
        btnDoneTask.classList.add('active');
    }

    
})

// console.log(edit);

fetch('data/taskData.php')
    .then(res => res.json())
    .then(result => {       
        for(elem in edit){
            for(element in result){
                if (result[element].taskID == edit[elem].id){
                    if(result[element].done != true){
                        let task= result[element];
                        edit[elem].addEventListener('click', (task) => {
                            if(task.taskpriority == 'high'){
                                editingElem[0].setAttribute('checked');
                            } else if(task.taskpriority == 'medium'){
                                editingElem[1].setAttribute('checked', 'checked');
                            } else if(task.taskpriority == 'low'){
                                editingElem[2].setAttribute('checked', 'checked');
                            } else{
                                editingElem[3].setAttribute('checked', 'checked');
                            }
                            editingElem[4].innerHTML = task.taskname;
                            editingElem[5].innerHTML = task.taskdate;
                            editingElem[6].innerHTML = task.reminder;
                            editingElem[7].innerHTML = task.tasknote;

                            if(task.tasktype == 'home'){
                                editingElem[8].setAttribute('checked', 'checked');
                            } else if(task.tasktype == 'work'){
                                editingElem[9].setAttribute('checked', 'checked');
                            } else {
                                editingElem[9].setAttribute('checked', 'checked');
                            }

                            if(edittask.classList.contains("hidden")){
                                edittask.classList.remove("hidden");
                                edittask.classList.add("d-flex");
                            }
                        });
                    } else{
                    edit[elem].style.opacity = "0.5";
                    }    
                }
            }
        }       
    })




for(elem of deletes){
    elem.addEventListener('click', (e)=>{
        let formData = new FormData();
        formData.append('idForDelete', e.target.id);
        fetch('data/updateData.php', {method: 'POST', body: formData})
            .then(res => res.text())
            .then(result => {
                console.log(result)
                if(result =='deleted'){
                    let parent = e.target.parentElement.parentElement;        
                    parent.remove();
                }
            })
    })
}