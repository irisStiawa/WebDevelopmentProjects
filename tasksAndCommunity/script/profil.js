const closeedituser = document.querySelector('#closeedituser');
const edituserbtn= document.querySelector('#edituserbtn');
const edituser = document.querySelector('#edituser');
const formEditUser= document.querySelector('#formEditUser');
const btnChanceData= document.querySelector('#btnChanceData');
const imageUpload = document.querySelector('#imageUpload');
const image = document.querySelector('#imagePreview');
const profilePicture = document.querySelector('#profilPicture')
const formEditImage = document.querySelector('#formEditImage')
const randomPersonIcon = document.querySelector('.fa-user-circle');
const navUserImage= document.querySelector('#navUserImage');


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

formEditUser.addEventListener('submit', function (e) {
    if(!formEditUser.checkValidity()) {
        e.preventDefault()
        e.stopPropagation()
    }
    formEditUser.classList.add('was-validated');
}, false)



imageUpload.addEventListener('change', (e) =>{
    fetch('data/updateData.php', {method: 'POST', body: new FormData(formEditImage)})
        .then(response => response.text())
        .then(res => {
            console.log(res);

            image.style.backgroundImage = "url('img/userImages/" + res + "')";

            if(randomPersonIcon  && !randomPersonIcon.classList.contains('hidden')){
                randomPersonIcon.classList.add('hidden');
            }
            
            if(navUserImage.classList.contains('hidden')){
                navUserImage.classList.remove('hidden');
            }

            navUserImage.setAttribute('src', "img/userImages/" + res);
            

            
            })
        .catch(error => console.log(error))
})



showpopup(edituserbtn, edituser);
closePopup(closeedituser, edituser);
closePopup(btnChanceData, edituser);

