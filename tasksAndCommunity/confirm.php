<?php
    require_once('config.php');

    $sql = "SELECT userID,email FROM user WHERE username = '$_GET[username]'";

        
    $stmt = $pdo->prepare($sql);
    $stmt->execute(); 

    require_once("inc/head.inc.php");
    

    ini_set("sendmail_from", "noreply@localhost.com");
    
    $header  = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=utf-8\r\n";

    $subject = 'Kontofreigabe Parkland-Klinik';

    $msg = '<html>
        <head>
            <title>Kontofreigabe</title>
            <style></style>
        </head>

        <body>

            <h1>Ihr Konto wurde jetzt freigeben!</h1>
            
            <p>Der Administrator hat Ihr Konto jetzt freigeben. Klicken Sie auf nachfolgenden Link um sich einzuloggen:</p>

            <a href= "http://localhost/myexe_taskmanager/">Zum Login</a>
            
        </body>
    </html>';

    
    
    if($stmt->rowCount() == 1){
        while($user = $stmt->fetch()){
            $id = $user->userID;
            $mail = $user->email;

            $sql = "UPDATE user SET approved = 1 WHERE userID = $id";

            $setFree = $pdo->prepare($sql);
            $setFree->execute(); 

            if($setFree != false){
                if(mail($mail, $subject, $msg, $header)){                ;
                    echo "<p id='verify'> Der Nutzer  wurde erfolgreich freigeben.</p>";
                } else {
                    echo "<p id='verify'> Fehler! Der Nutzer  konnte nicht freigeben werden.</p>";
                }
            }
        }
    }

    ?>
    
    <?php require_once("inc/foot.inc.php");?>





    



