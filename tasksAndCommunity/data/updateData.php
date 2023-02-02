<?php
    session_start();
    require_once('../config.php');
    
    

    if(isset($_POST['idForDone'])){
        $sql = "UPDATE tasks SET done = true WHERE taskID = $_POST[idForDone]";
        $update = $pdo->prepare($sql);
        $update->execute(); 
        if(!$update){
            print_r($pdo->errorinfo());
        } else{
            echo true;
        }
    }
    
    if(isset($_POST['idForDelete'])){
        $sql = "DELETE FROM tasks  WHERE taskID = $_POST[idForDelete]";
        $update = $pdo->prepare($sql);
        $update->execute(); 
        if(!$update){
            print_r($pdo->errorinfo());
        } else{
            echo true;
        }
    
    }

    

    if(isset($_FILES['file'])){
        $upload_folder = '../img/userImages/';
        $file_path = basename($_FILES['file']['name']);
        $filetype = substr($file_path, strrpos($file_path, '.'));
        $imgName = strval(time()).strval(rand(100,9999)).$filetype;
    
        $upload_path = $upload_folder.$imgName;

        if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_path)){
            
            $sqlForUpdate = "UPDATE user SET img = '$imgName' WHERE userID = $_SESSION[id]";

            $stmtForUpdate=$pdo->prepare($sqlForUpdate);
            $stmtForUpdate->execute();

            if(!$stmtForUpdate){
                print_r($pdo->errorinfo());
            } else{
                echo $imgName;
            }

        } else {
            echo 'Error: File loading';
        }
    } 

    if(isset($_FILES['image'])){
        $imgObj = [];
        for($i = 0; $i < count($_FILES['image']['name']); $i++){
            $upload_folder = '../img/galleryImages/';
            $file_path = basename($_FILES['image']['name'][$i]);
            $filetype = substr($file_path, strrpos($file_path, '.'));
            $imgName = strval(time()).strval(rand(100,9999)).$filetype;
        
            $upload_path = $upload_folder.$imgName;

            if(move_uploaded_file($_FILES['image']['tmp_name'][$i], $upload_path)){
                
                $sqlForInsert = "INSERT INTO gallery (userID, imageName) VALUES ('$_SESSION[id]', '$imgName')";

                $stmtForInsert=$pdo->prepare($sqlForInsert);
                $stmtForInsert->execute();

                $imgObj[] = $imgName;

            } else {
                echo 'Error: File loading';
            }
        }

        if(!$stmtForInsert){
            print_r($pdo->errorinfo());
        } else{
            echo json_encode($imgObj);
        }
    } 


    if(isset($_POST['galleryDelete'])){
            
        $sqlImgDelete = "DELETE FROM gallery WHERE galleryID = $_POST[galleryDelete]";

            $stmtImgDelete=$pdo->prepare($sqlImgDelete);
            $stmtImgDelete->execute();

            if(!$stmtImgDelete){
                print_r($pdo->errorinfo());
            } else{
                echo true;
            }


    }
    