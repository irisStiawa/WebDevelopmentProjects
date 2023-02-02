// let a = 4;
// let b = 5;

// function addNums(a, b){
// 	return a+b;
// }

// //alternative Schreibweise
// let addNums = function(a,b){
//     return a+b;
// }

// //Arrow Synatx für Funktionen
// let addNums = (a,b) => a+b;


// function sayHi(name){
//     return 'Hi' + name + '!';
// }

// //oder nur ein Parameter
// let sayHi2 = name => 'Hi' + name + '!';

// let doHeal = () => 'Wololo!';

// console.log(doHeal());

// document.addEventListener('click', e => console.log(e.clientX));

// class Person{
//     constructor(name){
//         this.name= name;
//     }

//     printNameFunction() {
//         setTimeout(function(){
//             console.log('with Function:' + this.name);
//         }, 1000);
//     }

//     printNameArrow() {
//         setTimeout(() => {
//             console.log('with Arrow:' + this.name);
//         }, 1000);
//     }
// }

// let iris = new Person('Iris');
// iris.printNameArrow();
// iris.printNameFunction();

let p = 0;
let blocked=false;

window.addEventListener('scroll', () => {
    if((window.innerHeight + Math.ceil(window.pageYOffset)) >= document.body.scrollHeight &&blocked == false){
        blocked = true;
        lazyload();
    }
})

let lazyload = () => {
    fetch('inc/reload.php?p=' + p)
        .then(response => {
            console.log(response);
            return response.json();
            })
        .then(posts => {
            for(post of posts){
                let d = document.createElement('div')
                d.classList.add('post');
                d.innerHTML = '<h2>' + post.title + '</h2>' + post.body;
                document.body.appendChild(d);
            }
            p +=10;
            blocked = false;
        })
        .catch(err => console.log(err));  
}

lazyload();







