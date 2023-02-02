<?php
    session_start();

    require_once('../config.php');

    

    if(isset($_POST['deleteFile'])){


        $getFile = "SELECT datapath FROM files WHERE fileID = '$_POST[deleteFile]'";
        
        $stmtgetFile=$pdo->prepare($getFile);
        $stmtgetFile->execute();
        

        while($path = $stmtgetFile->fetch()){
            $file = '../'.$path->datapath;
            unlink($file);
           
        }


        $sqlFileDelete = "DELETE FROM files WHERE fileID = $_POST[deleteFile]";

        $stmtFileDelete=$pdo->prepare($sqlFileDelete);
        $stmtFileDelete->execute();

        if(!$stmtFileDelete){
            print_r($pdo->errorinfo());
        } else{
            echo true;
        }    
    
    }