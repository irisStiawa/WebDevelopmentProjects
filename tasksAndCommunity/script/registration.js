const form = document.querySelectorAll('.needs-validation');


form[0].addEventListener('submit', function (event) {

  
  
  if (!form[0].checkValidity()) {
    event.preventDefault()
    event.stopPropagation()
  } else if(form[0][9].value != form[0][10].value){
    event.preventDefault()
    event.stopPropagation()

    let valid = document.querySelector("#repeatValid");
    let invalid = document.querySelector("#repeatInvalid");
    
    valid.style.display = "none";
    invalid.style.display = "block";

  }

  if(form[0][4].value != ""){
    fetch('data/userCheck.php')
      .then(response => response.json())
      .then(result => {
        for(username of result){
          if(username == form[0][4].value){
            event.preventDefault()
            event.stopPropagation()
            let exist = true;
            checkName(exist);
            
          } else {
            let exist = false;
            checkName(exist);
          }
        }  
      })
    }
  
  
  function checkName(exist){
    console.log(exist);
    let validName = document.querySelector("#validName");
    let invalidName = document.querySelector("#invalidName");
    if(exist == true){
      validName.style.display = "none";
      invalidName.style.display = "block";
    } else if(exist == false && form[0][4].value != ""){
      validName.style.display = "block";
      invalidName.style.display = "none";
    }
  } 



  
  
  form[0].classList.add('was-validated')
}, false)




    


