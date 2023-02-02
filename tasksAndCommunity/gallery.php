<?php
    session_start();


    require_once('config.php');

    if(!isset($_SESSION['id'])){
        header('Location: index.php');
    }

    $sqlGallery = "SELECT `galleryID`,`imageName` FROM `gallery` WHERE `userID` = '$_SESSION[id]'";

    $stmtGallery=$pdo->prepare($sqlGallery);
    $stmtGallery->execute();

    $result = $stmtGallery->fetchAll();

    foreach($result as $row){
        $gallery[] = $row;
    }
    

    require_once('inc/head.inc.php');
    
?>

<div id = "galleryMain" class = "container-fluid  d-flex  justify-content-end align-items-center">
        
    <p id="galleryExplain" class="text-uppercase ml-3 text-white">Your inspiration havn't be still in your head...</p>
</div>

<?php require_once('inc/nav.inc.php'); ?>

<div id = "galleryContainer" class="pt-3">
    <div id='addImage' class="d-flex justify-content-center">
        <form id='imageUpload' method="POST" action="gallery.php" enctype='multipart/form-data'>
            <input id="inputGalleryImages" class=" hidden" type='file' name = 'image[]' multiple accept=".png, .jpg, .jpeg"/>
            <label for="inputGalleryImages" id="labelGalleryUpload"><i class="fas fa-images"></i></label>
        </form>
    </div>


    <div id="galleryImages" class = "d-flex flex-wrap container-fluid">
        <?php 
            
            if(isset($gallery)){
                foreach($gallery as $row) {                
                    echo "<div class='divGallery bg-light p-1 m-4'>
                        <img class='galleryImage' src='img/galleryImages/$row->imageName' alt='picture'/>
                        <div class='hoverImage w-100 h-100 justify-content-center align-items-center'>
                            <i id='$row->galleryID' class='galleryShow far fa-eye mr-3'></i>
                            <i id='$row->galleryID' class='galleryTrash fas fa-trash'></i>
                        </div>
                    </div>";
                }
            }
            
            
        ?>
    </div>

</div>

<div id="slideShow" class="hidden justify-content-center align-items-center">
    <i id= "closeSlideShow" class="fas fa-times"></i>
    <i id ="left" onclick='plusDivs(-1)' class="mr-2 fas fa-angle-left"></i>
    <div id="divInnerShow" class="text-center">
        <?php 
            foreach($gallery as $row) {  
                echo"<img id='$row->galleryID' class='imgSlideShow hidden' src='img/galleryImages/$row->imageName' alt='picture'/>";
            }       
        ?>
    </div>

    <i  onclick='plusDivs(1)'id="right" class="ml-2 fas fa-angle-right"></i>


</div>






<?php 
    require_once('inc/footer.inc.php');?>
    <script src="script/gallery.js"></script>
    <?php require_once('inc/foot.inc.php');?>
