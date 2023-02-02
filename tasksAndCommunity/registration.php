<?php
    require_once('inc/head.inc.php');

    if(isset($_POST["submit"])){
        require_once('config.php');

        $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

        
        
        $sql = "INSERT INTO user (gender, firstname, lastname, username, birth,country, phone, email, pwd, approved) VALUES (:gender, :firstname, :lastname,:username, :birth, :country, :phone,:email, :pwd, :approved)";

        
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['gender' => $_POST['gender'],'firstname' => $_POST['firstname'], 'lastname' => $_POST ['lastname'], 'username' => $_POST['username'], 'birth' => $_POST['birth'], 'country' => $_POST['country'], 'phone' => $_POST['phone'], 'email' => $_POST['email'], 'pwd' => $pwd, 'approved' => 0]); 
        
        
        if($stmt != false){
            require_once('inc/mail.inc.php');
            if(mail($to, $subject, $msg, $header) == true){
                echo <<<EOT
                    <div id="approvedView" class="container-fluid p-0 row justify-content-center align-items-center text-center">
                        <div id="approvedDiv" class = "col ol-xs-12 col-lg-6 p-4">
                            <p id="approvedMSG">Vielen Dank für Ihre Registrierung!<br>Sobald Ihr Konto vom Administrator freigeben wurde werden Sie per E-Mail verständigt.</p><br>
                            <a href="index.php">
                            <button type="button" class="btn border-dark mr-0">Zurück zur Startseite</button></a>
                        </div>
                    </div>
                EOT;
            } else {
                echo <<<EOT
                <div id="approvedView" class="container-fluid p-0 row justify-content-center align-items-center text-center">
                    <div id="approvedDiv" class = "col ol-xs-12 col-lg-6 p-4">
                        <p id="approvedMSG">Leider ist bei Ihrer Registrierung ein Fehler aufgetreteten.<br>Bitte registrieren Sie sich erneut!!</p><br>
                        <a href="registration.php">
                        <button type="button" class="btn border-dark mr-0">Repeat registration</button></a>
                    </div>
                </div>
            EOT;

            }
        }
    }
?>
    
<div id="registrationMain" class = "container-fluid">
    <h1 id= "registrationH1">Registration</h1>
    <form id= "registrationForm" class = 'form-horizontal mt-5 needs-validation' novalidate action="registration.php" method="POST">
        <div class="form-group col col-xs-12 col-lg-6 mx-auto">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" required id="female" value="female"/>
                <label class="form-check-label" for="female">female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" required value="male"/>
                <label class="form-check-label mr-3" for="male">male</label>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please choose a gender!</div> 
                
            </div>
            <div>         
                <input type="text" class="form-control mt-2 mb-2 " placeholder="Enter first name" name="firstname" required id="firstname"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid first name!</div> 
            </div>
            <div>
                <input type="text" class="form-control mt-2 mb-2 " placeholder="Enter last name" name="lastname" required id="lastname"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid last name!</div> 
            </div>
            <div> 
                <input type="text" class="form-control mt-2 mb-2 " placeholder="Enter user name" name="username" required id="username"/>
                <div id ="validName" class="valid-feedback ">Looks good!</div> 
                <div id ="invalidName" class="invalid-feedback">Please choose a user name that has not been assigned!</div>   
            </div>
            <div>
                <input type="date" class="form-control mt-2 mb-2 " placeholder="Enter birth" name="birth" required id="birth"/> 
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide your birthday!</div> 
            </div>
            <div>      
                <input type="text" class=" form-control mt-2 mb-2" placeholder="Enter country" name="country" required id="country"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid country!</div> 
            </div>
            <div>
                <input type="text" class=" form-control mt-2 mb-2" placeholder="Enter phone" name="phone" required id="phone"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid phone number!</div> 
            </div>
            <div>
            <input type="email" class=" form-control mt-2 mb-2" required placeholder="Enter email" name="email" id="email"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid mailadress!</div> 
            </div>
            <div>
                <input type="password" required class=" form-control mt-2 mb-2" placeholder="Enter password" name="pwd" minlength= "8" id="pwd"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please enter a password with 8 characters!</div> 
            </div>
            <div>
                <input type="password" required class=" form-control mt-2 mb-2" placeholder="Confirm password" name="pwd2" minlength= "8" id="pwd2"/>
                <div id= "repeatValid" class="valid-feedback ">Looks good!</div> 
                <div id= "repeatInvalid"  class="invalid-feedback repeat">Please repeat the password!</div> 
            </div>
            <div class="mt-3 text-right">
                <button type="submit" name = "submit" value="submit" class="btn border-light mr-0">Register</button>
            </div>
        </div>
    </form>
</div>
<?php require_once('inc/footer.inc.php');?>
<script src="script/registration.js"></script>
<?php require_once('inc/foot.inc.php');?>