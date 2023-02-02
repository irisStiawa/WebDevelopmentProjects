const keys = document.querySelectorAll('.key');
const calcDisplay = document.querySelector('#display');
let n;
let lastOperator;



for(key of keys){
    key.addEventListener('click', display);
}

function display(e){
    n = e.target.attributes.value.nodeValue;
    
    if (calcDisplay.innerHTML == 0){
        calcDisplay.innerHTML = "";
    }

    lastOperator = calcDisplay.innerHTML.slice(-1);

    if(n == 'result' && !isNaN(lastOperator)){

        if(eval(calcDisplay.innerHTML) == 'Infinity'){
            calcDisplay.innerHTML = 0;
        } else {
            calcDisplay.innerHTML = eval(calcDisplay.innerHTML)
        }
    } else { 
        if(!isNaN(lastOperator)){
            console.log(calcDisplay.innerHTML)
            let arr = calcDisplay.innerHTML.split();
            console.log(arr)
            if(arr.length<20){
                calcDisplay.innerHTML = calcDisplay.innerHTML + n;  
            }
              
        } else {
            if(!isNaN(n)|| n == "-" && lastOperator != '-'){
                console.log(calcDisplay.innerHTML)
                let arr = calcDisplay.innerHTML.split();
                console.log(arr)
                if(arr.length<20){
                    calcDisplay.innerHTML = calcDisplay.innerHTML + n;  
                }
            }
        }
    }
}

window.addEventListener('keydown', (e) => {
    if(e.keyCode == 27){
        calcDisplay.innerHTML = 0;
    }
});



