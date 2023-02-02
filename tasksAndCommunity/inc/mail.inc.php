<?php

    ini_set("SMTP", "localhost");
    ini_set("smtp_port", "25");
    ini_set("sendmail_from", "noreply@localhost.com");

    $header  = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=utf-8\r\n";

    $to= 'irisstiawa@gmx.at';
    $subject= 'New Registration';

    $msg= '<html>
        <head>
            <title>New Registration</title>
            <style>
                tr  {height: 40px;}
                th   {font-weight: bold; text-align: start;}
                </style>
        </head>
        
        <body>
        
            <h1>New Registration!</h1>
            
            <p>The following account is waiting for approval:</p>
            
            <table>
                <tr>
                    <th>GENDER</th>
                    <td>'.$_POST["gender"].'</td>
                </tr>
                <tr>
                    <th>FIRSTNAME</th>
                    <td>'.$_POST["firstname"].'</td>
                </tr>
                <tr>
                    <th>LASTNAME</th>
                    <td>'.$_POST["lastname"].'</td>
                </tr>
                <tr>
                    <th>USERNAME</th>
                    <td>'.$_POST["username"].'</td>
                </tr>
                
                <tr>
                    <th>BIRTH</th>
                    <td>'.$_POST["birth"].'</td>
                </tr>
                <tr>
                    <th>COUNTRY</th>
                    <td>'.$_POST["country"].'</td>
                </tr>
                <tr>
                    <th>PHONE NUMBER</th>
                    <td>'.$_POST["phone"].'</td>
                </tr>
                <tr>
                    <th>EMAIL</th>
                    <td>'.$_POST["email"].'</td>
                </tr>                
            </table>
            <p>Please click on confirmation to approve the user!</p>
            <a href="http://localhost/myexe_taskmanager/confirm.php?username='.$_POST['username'].'">CONFIRM</a>
        </body>
    </html>';

    