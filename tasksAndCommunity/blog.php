<?php
    require_once('config.php');

    session_start();

   

    if(!isset($_SESSION['id'])){
        header('Location: index.php');
    }

    if(isset($_GET['blog'])){
        
        $sqlblog = "SELECT * FROM blogs WHERE blogID = $_GET[blog]";

        $stmtblog = $pdo->prepare($sqlblog);
        $stmtblog->execute(); 


    } else{
        header('Location: login.php');
    }

    

    require_once('inc/head.inc.php');

?>

<div id = "blogMain" class = "container-fluid  d-flex  justify-content-start align-items-center">
        
    <p id="blogExplain" class="ml-3 text-white display-4 font-gready-thin">Workflow</p>
</div>

<?php require_once('inc/nav.inc.php'); ?>

<div id = "blogContainer" class="p-5">

    <a href="login.php"><button id="btnReturn" class="btn border-light mb-4">Return</button></a>

    <?php

        while($blog = $stmtblog->fetch()){
            
            echo <<<EOT
            <p id= "blogTyp">$blog->typ</p>
            <h2 id= "blogTitle">$blog->title</h2>
            $blog->image
            <p id= "blogText">$blog->text</p>
            EOT;
        }
    
    ?>

    
</div>

<?php 
    require_once('inc/footer.inc.php');require_once('inc/foot.inc.php'); 
?>