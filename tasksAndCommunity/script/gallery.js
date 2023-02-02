const imageUpload = document.querySelector('#inputGalleryImages');
const formAddImages = document.querySelector('#imageUpload');

const galleryTrash = document.querySelectorAll('.galleryTrash');
const galleryShow = document.querySelectorAll('.galleryShow');
const slideShow =document.querySelector('#slideShow');
const closeSlideShow = document.querySelector('#closeSlideShow');
let images = document.querySelectorAll(".imgSlideShow");


const right = document.querySelector('#right');
const left = document.querySelector('#left');

let slideIndex = 1;


function galleryImage(imgName) {
    
    let div = document.createElement('div');
    div.classList.add('divGallery','bg-light', 'p-1', 'm-4');
    let img = document.createElement('img');
    img.setAttribute('src', 'img/galleryImages/' + imgName);
    img.setAttribute('alt', 'picture');
    img.classList.add('galleryImage');
    div.appendChild(img);


    let galleryImages =document.querySelector('#galleryImages');
    galleryImages.appendChild(div);

}


imageUpload.addEventListener('change', (e) =>{
    console.log(e)
    fetch('data/updateData.php', {method: 'POST', body: new FormData(formAddImages)})
        .then(response => response.json())
        .then(res => {
            for(img in res){
                galleryImage(res[img]);
            }
            })
        .catch(error => console.log(error))
})

for(elem of galleryTrash){
    elem.addEventListener('click', deleteImage);
}


function deleteImage(e){
    let id = e.target.id;

    let formData = new FormData();
    formData.append('galleryDelete', id);
    fetch('data/updateData.php', {method: 'POST', body: formData})
        .then(res => res.text())
        .then(result => {
            if(result == true){
                let parent = e.target.parentElement.parentElement;
                parent.remove();
            }

        })

}

for(elem of galleryShow){
    elem.addEventListener('click', viewShow);
}

function viewShow(e){
    let slideID=0;
    let id = e.target.id;
    
    for(elem of images){
        elem.setAttribute('slideID', slideID++);
        if(elem.getAttribute('id') == id){
            slideIndex = slideID;
        }
    }
    
    removeHidden(slideShow, 'd-flex');
    console.log(slideIndex);
    showDivs(slideIndex);
}

function removeHidden(object, setTo){
    if(object.classList.contains('hidden')){
        object.classList.remove('hidden');
        object.classList.add(setTo);
    }
}

function setHidden(object, remove){
    if(!object.classList.contains('hidden')){
        object.classList.add('hidden');
        object.classList.remove(remove)
    }
}




function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    
    if (n > images.length) {slideIndex = 1};
    if (n < 1) {slideIndex = images.length};
    for (i = 0; i < images.length; i++) {
        setHidden(images[i]);
    }    
    removeHidden(images[slideIndex-1]); 

}

closeSlideShow.addEventListener('click', ()=> {
    setHidden(slideShow, 'd-flex');
})









