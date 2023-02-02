<?php
session_start();
require_once("inc/head.inc.php");



?>

<div id= "startPage">
    <?php require_once("inc/header.inc.php");
    ?>


    
    <?php require_once("inc/nav.inc.php");?>

    <aside id ="contentAreaIndex">
        <section id="projects">
            <div id= "divImages">
                <div>
                    <img src="img/projects.png" alt="projects">
                    <p class ="strong">Example Code</p>
                    <p> commonly used algorithms for your own use...</p>
                </div>
                <div>
                    <img src="img/list.png" alt="list" title="Checklist">
                    <p>Lists</p>
                </div>
                <div>
                    <img src="img/file.png" alt="file" title= "Files">
                    <p>Download Files</p>
                </div>
            </div>
        </section>
        <section id= "others">></section>
        

    </aside>

</div>

<?php require_once("inc/foot.inc.php");?>