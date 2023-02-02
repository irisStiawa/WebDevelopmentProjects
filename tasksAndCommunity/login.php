<?php
    session_start();

    require_once('config.php');

    if(!isset($_SESSION['id'])){
        header('Location: index.php');
    }

    $sqlblog = "SELECT*FROM blogs";

    $stmtblog = $pdo->prepare($sqlblog);
    $stmtblog->execute(); 

    require_once('inc/head.inc.php');
    
?>

    <div id = "loginMain" class = "container-fluid p-0 d-flex flex-column justify-content-center align-items-end">
        
        <a href="gallery.php" id="loginLink" class= "mr-5 display-3 font-gready-thin">MyGallery</a>
        <p id="loginExplain" class=" mr-5 pt-2 text-light">your pictures to manage and share...</p>
    </div>

    <?php require_once('inc/nav.inc.php'); ?>

    <div id="loginContainer" class="container-fluid py-5 ">
    <?php 

        while($blog = $stmtblog->fetch()){
            echo <<<EOT
                <div id= 'blogLogin' class="  text-center pb-5 d-flex flex-row justify-content-lg-around">
                <div class= " d-flex justify-content-center col col-lg-6 col-sm-12 ">
                    $blog->image
                </div>
                <div class=" col col-lg-6 col-sm-12 justify-content-start align-start">
                    <a href= "blog.php?blog=$blog->blogID" class="text-dark  label-blogtyp">$blog->typ</a><br>
                    <h2 class = "mb-3 mt-1"><a href= "blog.php?blog=$blog->blogID" class="text-dark font-weight-500">$blog->title</a></h2>
                    <p>$blog->discription</p>
                </div>
            </div>


            EOT;


        }
    
    
    
    
    ?>
        
    </div>



    <?php 
    require_once('inc/reminder.inc.php');
    require_once('inc/footer.inc.php');?>
    <script src="script/login.js"></script>
    <?php require_once('inc/foot.inc.php');?>

