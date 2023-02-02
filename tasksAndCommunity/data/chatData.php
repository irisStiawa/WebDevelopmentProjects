
<?php
    session_start();
    require_once('../config.php');

    

    function timestamp($secs){
        $bit = array(
            'h' => $secs / 3600 % 24 + 2,
            'm' => $secs / 60 % 60,
            's' => $secs % 60
            );
           
        foreach($bit as $k => $v)
            if($v > 0)$ret[] = $v . $k;
           
        return join(' ', $ret);
    }

    

    // $secs = time();
    // $localtime = 'UTC +2: '.timestamp($secs);
    // $date = date('Y-m-d');

    // print_r($date);
    // print_r($localtime);

    if(isset($_POST['newMsg'])){
        $secs = time();
        $localtime = 'UTC +2: '.timestamp($secs);
        $date = date('Y-m-d');

        $newMsgSQL = "INSERT INTO community (userID, nowDate, nowTime, comments, msg) VALUES ('$_SESSION[id]', '$date', '$localtime', 0, '$_POST[newMsg]')";
        
        $newMsgStmt = $pdo->prepare($newMsgSQL);
        $newMsgStmt->execute();

        if(!$newMsgStmt){
            print_r($pdo->errorinfo());
        } else{
            $arr = ['saved'];
            echo json_encode($arr);
        }
    }


    if(isset($_POST['chatData'])){
        $messages = [];
        $chatSQL = "SELECT community.msgID, community.nowDate, community.nowTime, community.comments, community.msg, user.username, user.img FROM community INNER JOIN user ON community.userID = user.userID";
        
        $chatStmt = $pdo->prepare($chatSQL);
        $chatStmt->execute();

        if(!$chatStmt){
            print_r($pdo->errorinfo());
        } else {
            
            while($msg = $chatStmt->fetch()){

                $msg->img != '' ? $src = "<img class='imgCommuntityChat mr-3' src='img/userImages/".$msg->img."' alt='picture'>" : $src = '<i class="fa fa-user-circle mr-3"></i>';


             $communityMsg = "<div class='msgRow w-100 d-flex my-3'>$src<div class='msg w-75 bg-light rounded p-2'><p class='communityUserName m-0'>$msg->username</p><p class='stamp mb-2'>$msg->nowDate $msg->nowTime</p><p class='msg'>$msg->msg</p><p class='comments  my-1' id='$msg->msgID'>$msg->comments Kommentare</p><div class='commentsView hidden mt-3' id='$msg->msgID'><div class='commentsDiv' id='$msg->msgID'><div class='writeCommentContainer m-2' id='$msg->msgID'><input id='inputNewComment$msg->msgID' class='inputNewComment bg-white w-75 w-md-100  mr-3 rounded p-1' type='text' placeholder='Write a Comment' name='newComment'><button class='btnNewComment w-sm-100 px-3' type='submit' name='sendNewComment' id='$msg->msgID'>Send Comment</button></div></div></div></div></div>";
                
                $messages[$msg->msgID] = $communityMsg;
                
                
            }
            
            echo json_encode($messages);
        } 
    }


    if(isset($_POST['getComments'])){
      
        $getCommentsSQL = "SELECT communitycomments.commentID, communitycomments.msgID, communitycomments.userID, communitycomments.nowTime, communitycomments.nowDate, communitycomments.comment, user.username FROM communitycomments INNER JOIN user ON communitycomments.userID = user.userID WHERE communitycomments.msgID = $_POST[getComments]";
        
        $getCommentsStmt = $pdo->prepare($getCommentsSQL);
        $getCommentsStmt->execute();

        while($com = $getCommentsStmt->fetch()){
            $comments[] = $com;
        }

        if(empty($comments)){
          
            $arr = array('0' => "none");
            echo json_encode($arr);
        } else {
            echo json_encode($comments);
        }
    }



    


    if(isset($_POST['newComment'])){
        $secs = time();
        $localtime = 'UTC +2: '.timestamp($secs);
        $date = date('Y-m-d');

        $setCommentsSQL= "INSERT INTO `communitycomments` (`msgID`, `userID`, `nowTime`, `nowDate`, `comment`) VALUES ($_POST[id], $_SESSION[id], '$localtime', '$date', '$_POST[newComment]')";

        $setCommentStmt = $pdo->prepare($setCommentsSQL);
        $setCommentStmt->execute();


        $getCommentCount = "SELECT comments FROM community WHERE msgID = $_POST[id]";

        $getCountStmt = $pdo->prepare($getCommentCount);
        $getCountStmt->execute();

        while ($count = $getCountStmt->fetch()){
            $newCount = $count->comments + 1;

            $setCommentCount = "UPDATE community SET comments = $newCount WHERE msgID = $_POST[id]";

            $setCountStmt = $pdo->prepare($setCommentCount);
            $setCountStmt->execute();
        }

        $getCommentsSQL= "SELECT * FROM `communitycomments` WHERE nowDate = '$date' AND nowTime = '$localtime' AND comment = '$_POST[newComment]' AND userID = '$_SESSION[id]'";

        $getCommentStmt = $pdo->prepare($getCommentsSQL);
        $getCommentStmt->execute();

        $getUsernameSQL= "SELECT username FROM user WHERE userID = $_SESSION[id]";

        $getUsernameStmt = $pdo->prepare($getUsernameSQL);
        $getUsernameStmt->execute();
                
        
        if(!$getCommentStmt && !$getUsernameStmt){
            print_r($pdo->errorinfo());
        } else {
            $obj = new stdClass();
            while($username = $getUsernameStmt->fetch()){
                $obj->username = $username->username;
            }
            while ($newComment = $getCommentStmt->fetch()){
                $obj->commentID = $newComment->commentID;
                $obj->nowDate = $newComment->nowDate;
                $obj->nowTime = $newComment->nowTime;
                $obj->comment = $newComment->comment;
                $obj->count = $newCount;
            }

            echo json_encode([$obj]);
        }

    }



?>