<?php

    session_start();
    require_once('config.php');

    if(!isset($_SESSION['id'])){
        header('Location: index.php');
    }

    require_once('inc/head.inc.php');
    
?>

<div id = "communityMain" class = "container-fluid  d-flex  justify-content-end align-items-center">
        
    <h1 id="communityExplain" class="text-uppercase ml-3 text-light">Community</h1>
</div>

<?php require_once('inc/nav.inc.php'); ?>

<div id = "communityContainer" class="p-5">

    <div id="msgContainer">

        <!-- <div class="msgRow w-100 d-flex ">
            <i class='fa fa-user-circle mr-3'></i>
            <div class="msg w-75 bg-light rounded p-2">
                <p class="communityUserName m-0">Administrator</p>
                <p class="grey stamp mb-2">2h ago</p>
                <p class="msg">Hello Welt!</p>
                <p class="comments my-1">3 Kommentare</p>
                <div class="commentsView mt-3">
                    <div class = "commentsDiv ">
                        <div class="userComment d-flex align-items-center my-3 position-relative">
                        <p class="commentUserName">Administrator</p>
                        <p class="comment ml-2">jajajajajaja</p>
                        <p class="commentStamp ml-2 position-absolute">2021-08-03 UTC +2: 9h 9m 36s</p>
                        </div>
                    </div>
                    <div class="writeCommentContainer m-2">
                        <input type="text" placeholder="Write a Comment" name="newComment" class="inputNewComment bg-white w-75 mr-3 rounded p-1">
                        <button type="submit" name="sendNewComment" class="btnNewComment">Send Comment</button>
                    </div>
                </div>
            </div>
        </div>            -->
    </div>
    <div class="writeMsgContainer m-5 d-flex align-items-center flex-column flex-md-row">
        
        <textarea type="text" rows="3" resize = "none" placeholder="Write a message" name="newMsg" id="inputNewMsg" class="bg-white w-75 mr-3 rounded p-1"></textarea>
        <button type="submit" name="sendNewMsg" class="px-3 " id="btnNewMsg">Send Message</button>
        
    </div>


</div>

<?php 
    require_once('inc/footer.inc.php');?>
    <script src="script/community.js"></script>
    <?php require_once('inc/foot.inc.php');?>


  

