const btnTrash = document.querySelectorAll('.fa-trash');
const elements = document.querySelectorAll('*[id]');
let elemObj = {};

doVariables(elements);

function doVariables(elements){
    for(element of elements){
        elemObj[element.id] = element;
    }
}

elemObj.formAddLink.addEventListener('submit', function (e) {
    if(!elemObj.formAddLink.checkValidity()) {
        e.preventDefault()
        e.stopPropagation()
    }
    elemObj.formAddLink.classList.add('was-validated');

}, false)

elemObj.formAddFiles.addEventListener('submit', function (e) {
    if(!elemObj.formAddFiles.checkValidity()) {
        e.preventDefault()
        e.stopPropagation()
    }
    elemObj.formAddFiles.classList.add('was-validated');

}, false)


function showPopup(eventforPop, pop){
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

elemObj.inputLinkPicture.addEventListener('change', (e) =>{
    let file = e.target.value.substring(e.target.value.lastIndexOf('\\') + 1);

    elemObj.labelLinkPicture.innerHTML = file;
    
})

elemObj.inputFileUpload.addEventListener('change', (e) =>{
    let file = e.target.value.substring(e.target.value.lastIndexOf('\\') + 1);

    elemObj.labelFileUpload.innerHTML = file;
    
})

for(elem of btnTrash){
    elem.addEventListener('click', async (e) =>{
        let result = await sendFormData('deleteFile', e.target.id);
        if(result == true){
            e.target.parentElement.parentElement.remove();
        }
    })
}

async function sendFormData(key, value){
    let formData = new FormData();
    formData.append(key, value);
    let result = await fetch('data/developmentData.php', {method: 'POST', body: formData})
        .then(response => response.text())
        .then(res => {
            return res;}) 
    return result;
}


// select files

elemObj.select.addEventListener('change',(e)=>{

    let files = document.querySelectorAll('.fileContainer');

    if(e.target.value == 'all'){

        for(file of files){
        
            if(file.classList.contains('hidden')){
                file.classList.remove('hidden');
                file.classList.add('d-flex');

            }
        }

    } else {

        for(file of files){
        
            if(file.classList.contains('hidden')){
                file.classList.remove('hidden');
                file.classList.add('d-flex');

            }

            if(file.getAttribute('category') !== e.target.value){
                console.log('do')
                file.classList.add('hidden');
                file.classList.remove('d-flex');
            }
        }
    }
})




showPopup(elemObj.btnNewLink, elemObj.addlink);
closePopup(elemObj.btnCloseAddLink, elemObj.addlink);
showPopup(elemObj.btnLoadFile, elemObj.addfiles);
closePopup(elemObj.btnCloseAddFiles, elemObj.addfiles);