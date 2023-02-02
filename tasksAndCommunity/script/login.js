remindertasks = document.querySelector('#remindertasks');


closeremindertask = document.querySelector('#closeremindertasks');


function closePopup(eventforClose, close){
    eventforClose.addEventListener('click', () => {
        if(close.classList.contains("d-flex")){
            close.classList.remove("d-flex");
            close.classList.add("hidden");
        }
    })
}


if(closeremindertask){
    closePopup(closeremindertask, remindertasks);
}