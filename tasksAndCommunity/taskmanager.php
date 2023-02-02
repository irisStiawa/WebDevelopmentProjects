<?php 
session_start();

require_once('config.php');

if(!isset($_SESSION['id'])){
    header('Location: index.php');
}

if(isset($_POST['submit']) && $_POST['submit'] == 'addtask'){
    
    $tasknote = "";
    if(isset($_POST['tasknote'])){
        $tasknote = $_POST['tasknote'];
    } 

    $insert = "INSERT INTO `tasks`( `userID`, `taskname`, `taskdate`, `tasknote`, `taskpriority`, `tasktype`, `reminder`, `done`) VALUES (:id, :taskname,:taskdate,:tasknote,:taskpriority,:tasktype,:reminder, :done)";
    $settask = $pdo->prepare($insert);
    $settask->execute(['id' => $_SESSION['id'], 'taskname' => $_POST['taskname'], 'taskdate' => $_POST['taskdate'], 'tasknote' => $tasknote, 'taskpriority' => $_POST['taskpriority'],'tasktype' => $_POST['tasktype'],'reminder' => $_POST['reminder'], 'done' => false]); 
    
}

if(isset($_POST['submit']) && $_POST['submit'] == 'edittask'){
   
    $tasknote = "";
    if(isset($_POST['tasknote'])){
        $tasknote = $_POST['tasknote'];
    } 

    $insert = "UPDATE `tasks` SET `taskname` = :taskname, `taskdate` = :taskdate, `tasknote` = :tasknote, `taskpriority` = :taskpriority, `tasktype` = :tasktype, `reminder` = :reminder WHERE `tasks`.`taskID` = $_POST[taskID];";

    $updatetask = $pdo->prepare($insert);
    $updatetask->execute(['taskname' => $_POST['taskname'], 'taskdate' => $_POST['taskdate'], 'tasknote' => $tasknote, 'taskpriority' => $_POST['taskpriority'],'tasktype' => $_POST['tasktype'],'reminder' => $_POST['reminder']]); 

}





$sql = "SELECT * FROM tasks WHERE userID = $_SESSION[id]";
$tasks = $pdo->prepare($sql);
$tasks->execute(); 
    
require_once('inc/head.inc.php');
 
 
 
 ?>


<div id = "taskMain" class = "container-fluid d-flex flex-column justify-content-center">
    <h1 id="taskH1" class= "display-4 text-light ">DO WHAT YOU LOVE AND LOVE WHAT YOU DO</h1>
</div>

<?php require_once('inc/nav.inc.php'); ?>

<div id="taskContainer" class="container-fluid pt-5">
 
    <div class= "container-sm m-2 t mx-auto p-0 row justify-content-between">
        <button id="btnAddTask" class="btn border-light">+Add new Task</button>
        <div class= 'd-flex'>
            <form action="taskmanager.php" method="post">
            <?php
                if(isset($_POST['opentasks']) || !isset($_POST['opentasks']) && !isset($_POST['donetasks'])){
                    echo <<<EOT
                    <button id="btnActiveTask" name='opentasks'  class=" btn border-light mr-2 active"><i class="fas fa-list-ul mr-1"></i>Active <span class="blendOut">Tasks</span></button>
                    EOT;
                } else {
                    echo <<<EOT
                    <button id="btnActiveTask" name='opentasks'  class=" btn border-light mr-2"><i class="fas fa-list-ul mr-1"></i>Active <span class="blendOut">Tasks</span></button>
                    EOT;
                } 
                ?>
            </form>
            <form action="taskmanager.php" method="post">
                <?php
                if(isset($_POST['donetasks'])){
                    echo <<<EOT
                    <button id= "btnDoneTask" name='donetasks' class=" active btn border-light"><i class="fas fa-list-ul mr-1"></i>Done <span class="blendOut">Tasks</span></button>
                    EOT;
                } else if (isset($_POST['opentasks']) || !isset($_POST['opentasks']) && !isset($_POST['donetasks'])){
                    echo <<<EOT
                    <button id="btnDoneTask" name='donetasks' class="btn border-light"><i class="fas fa-list-ul mr-1"></i>Done <span class="blendOut">Tasks</span></button>
                    EOT;
                }
                ?>
            
            </form>
            
        </div>
    </div>
    <div id="tasks" class="container-sm  overflow-auto bg-white rounded">

        <?php 

            if(!isset($_POST['donetasks'])|| isset($_POST['opentasks'])){
                while($task = $tasks->fetch()){
                    if($task->done == 0){
                        echo <<<EOT
                        <div id = "$task->taskID" class="row p-2 bg-light justify-content-between align-items-center">
                            <div class="col col-sm-6 d-flex align-items-center">
                                <img title="Priority" class="imgtask mr-4" src="img/projectImages/$task->taskpriority.png" alt="priority">
                                <p class="m-0">$task->taskname</p>
                            </div>
                            <div class=" col col-sm-6  text-right align-self-center">
                            <i title= "Show task" id = "$task->taskID" class="show far fa-eye px-2"></i>
                            <i title= "Edit task" id = "$task->taskID" class="edit fas fa-pencil-alt px-2"></i>
                            <i title= "Delete task" id = "$task->taskID" class="delete fa fa-trash  px-2"></i>
                            <i title= "Archive task" id = "$task->taskID" class="done fa fa-check px-2 mr-3"></i>
                            </div>
                        </div> 
                    EOT;
                    }
                }
            } else {
                while($task = $tasks->fetch()){
                    if($task->done == 1){
                        echo <<<EOT
                        <div id = "$task->taskID" class="row p-2 bg-light justify-content-between align-items-center">
                            <div class="col col-sm-6 d-flex align-items-center">
                                <img title="Priority" class="imgtask mr-4" src="img/projectImages/$task->taskpriority.png" alt="priority">
                                <p class="m-0">$task->taskname</p>
                            </div>
                            <div class="col col-sm-6 text-right align-self-center">
                            <i title= "Show task" id = "$task->taskID" class="show far fa-eye px-2"></i>
                            <i title= "Edit task" id = "$task->taskID" class="edit fas fa-pencil-alt px-2"></i>
                            <i title= "Delete task" id = "$task->taskID" class="delete fa fa-trash  px-2"></i>
                            <i title= "Archive task" id = "$task->taskID" class="done isdone fa fa-check px-2 mr-3"></i>
                            </div>
                        </div> 
                    EOT;
                    }
                }
            }
        ?>
        <!-- <div>

        </div> -->
    </div>
</div> 


<?php 
    require_once('inc/addtask.inc.php');
    require_once('inc/edittask.inc.php'); 
    require_once('inc/showtask.inc.php'); 
?>



<script src="script/taskmanager_version2.js"></script>
<?php 
    require_once('inc/footer.inc.php');require_once('inc/foot.inc.php'); 
    ?>

