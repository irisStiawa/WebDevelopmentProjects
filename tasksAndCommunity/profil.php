<?php
    session_start();


    require_once('config.php');

    if(!isset($_SESSION['id'])){
        header('Location: index.php');
    }

    if(isset($_POST['chanceData'])){
        $sql = "UPDATE user SET lastname = :lastname, country = :country, phone = :phone, email = :email WHERE userID = $_SESSION[id]";

        
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['lastname' => $_POST ['lastname'], 'country' => $_POST['country'], 'phone' => $_POST['phone'], 'email' => $_POST['email']]); 
    }

    require_once('inc/head.inc.php');
    
?>

    <div id = "profilMain" class = "container-fluid d-flex flex-column justify-content-center">
        <h1  class= "display-2 text-light font-gready-thin">feel free to be</h1>
        
    </div>

    <?php require_once('inc/nav.inc.php'); ?>
    
    <div id="useroptions" class="p-5">
        <div id="profildata" class="p-4 rounded">
            <h5 id= "profilH2" class= mb-4>you are logged in as</h5>
            <div class="container ">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-upload mt-5">
                            <div class="avatar-edit">
                                <form id= "formEditImage" action="" enctype='multipart/form-data' method="post">
                                <input type='file' name = 'file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                </form>
                                <label id ="editImage"for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <?php
                                    if($user->img == ''){
                                        echo '<div id="imagePreview"></div>';
                                    } else {
                                        echo '<div id="imagePreview" style = "background-image: url(img/userImages/'.$user->img.');"></div>';
                                    }
                                
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <?php echo " 
                    <h5 class='mb-4'>$user->username <i id = 'edituserbtn' class= 'pencil-opacity ml-3 fas fa-pencil-alt'></i></h5>
                    <div class='row'>
                        <div class='ml-4 col'>
                            <span class='bold'>gender</span>   
                        </div>
                        <div class='col'>
                            <p> $user->gender</p>   
                        </div>
                    </div>
                    <div class='row'>
                        <div class='ml-4 col'>
                            <span class='bold'>firstname</span>   
                        </div>
                        <div class='col'>
                            <p> $user->firstname</p>   
                        </div>
                    </div>
                    <div class='row'>
                        <div class='ml-4 col'>
                            <span class='bold'>lastname</span>   
                        </div>
                        <div class='col'>
                            <p> $user->lastname</p>   
                        </div>
                    </div>
                    <div class='row'>
                        <div class='ml-4 col'>
                            <span class='bold'>birth</span>   
                        </div>
                        <div class='col'>
                            <p> $user->birth</p>   
                        </div>
                    </div>
                    <div class='row'>
                        <div class='ml-4 col'>
                            <span class='bold'>country</span>   
                        </div>
                        <div class='col'>
                            <p> $user->country</p>   
                        </div>
                    </div>
                    <div class='row'>
                        <div class='ml-4 col'>
                            <span class='bold'>phone</span>   
                        </div>
                        <div class='col'>
                            <p> $user->phone</p>   
                        </div>
                    </div>
                    <div class='row'>
                        <div class='ml-4 col'>
                            <span class='bold'>email</span>   
                        </div>
                        <div class='col'>
                            <p> $user->email</p>   
                        </div>
                    </div>"
                    
                    
                    
                    ?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    



    <?php 
    require_once('inc/edituser.inc.php');
    require_once('inc/footer.inc.php');?>
    <script src="script/profil.js"></script>
    <?php require_once('inc/foot.inc.php');?>