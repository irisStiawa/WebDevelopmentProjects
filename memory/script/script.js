const card =  document.querySelectorAll('.card');
const myAr = document.querySelectorAll('.fas');
const mything = ['fa-cat', 'fa-cat', 'fa-cocktail', 'fa-cocktail', 'fa-poo', 'fa-poo', 'fa-smile', 'fa-smile', 'fa-laugh', 'fa-laugh', 'fa-paw', 'fa-paw', 'fa-hippo', 'fa-hippo', 'fa-dove', 'fa-dove'];
let myattempts = document.querySelector('.myattempts')
let mytime = document.querySelector('.mytime')
let memoryfield = document.querySelector('.gamearea')
let activ = '';
let activpos = '';
let removed = [];
let attempt = 0;
let points = 0;
let counter = true;
let sec = 0
let min = 0

memoryfield.addEventListener('click', playTime);

function playTime() {
    
    let startTime = Math.round(new Date().getTime()/1000);

    memoryfield.removeEventListener('click',playTime);

    let start = setInterval(nowTime, 1);

        function nowTime() {
        
        if(removed.length == 16) {
            
                clearInterval(start);
                mytime.innerHTML = min + ':' + sec;    
        } else {
        
            let currTime = Math.round(new Date().getTime()/1000);
        
            sec = currTime - startTime;
            
            sec < 10 ? sec = '0' + sec : false;

            if(sec == 59) {
                sec = '0' + 0; 
                min++;
                startTime = Math.round(new Date().getTime()/1000);
                }
            mytime.innerHTML = min + ':' + sec;
            }  
    };
}

myfunc(myAr);

function myfunc(field) {
    for(let elem of field) {
    elem.classList.add(mything.splice(Math.round(Math.random() * (mything.length - 1)), 1));
    }
}

for(let elem of card) {
    elem.addEventListener('click', memory);
}
    
function memory() {
    this.classList.add('clicked');
    
    if (activpos == this) {
        activpos.classList.remove('clicked');
        activ = '';
        activpos = '';   
    } else {
        if(activ == '') {
            activ = this.firstChild.classList[1];
            activpos = this;
        } else if (activ == this.firstChild.classList[1]) {
            removed.push(this, activpos)
                        
            counter == true? points += 50 : points+= 25;
            counter = true;
            
            if(removed.length == 16){
                if(attempt < 15) {
                    alert('Super du hast gewonnen !!! Deine Punkte: ' + points);
                    
                } else if(attempt < 20) {
                    alert('Mittelmäßige Leistung !!! Deine Punkte: ' + points);
                } else {
                    alert('Alter üb mal noch!!! Deine Punkte: ' + points);
                }
            } 
            
            this.removeEventListener('click', memory);
            activpos.removeEventListener('click', memory);
            activ = '';
            activpos = '';
            attempt += 1;
            myattempts.innerHTML = attempt;
        } else {
            let secpos = this;
            for(elem of card) {
                elem.removeEventListener('click', memory)
            }
            setTimeout(function() {
                secpos.classList.remove('clicked');
                activpos.classList.remove('clicked');
                activ = '';
                activpos = '';
                for(let elem of card) {
                    elem.addEventListener('click', memory)
                }
                for(let elem of removed) {
                    elem.removeEventListener('click', memory)
                }
                }, 1000);
                attempt += 1;
                myattempts.innerHTML = attempt;
                counter = false;
            }
    }
}









    
    























