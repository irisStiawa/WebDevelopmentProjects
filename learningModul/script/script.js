let elements = document.querySelectorAll('*[id]');
console.log(elements);

elements[5].addEventListener("click", () => {
    if(elements[10].style.display != "none"){
        elements[10].style.display = "none";
        elements[7].style.display = "flex";
    }else {
        elements[7].style.display = "flex";
    }
})

elements[6].addEventListener("click", () => {
    if(elements[7].style.display != "none"){
        elements[7].style.display = "none";
        elements[10].style.display = "flex";
    } else {
        elements[10].style.display = "flex";
    }
})
