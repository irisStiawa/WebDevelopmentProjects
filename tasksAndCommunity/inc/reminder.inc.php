<?php
    $today = getdate();

    $reminder = dateformat($today);

    function dateformat($today){
        function binary($num){

            strlen($num) < 2 ? $res = '0'.$num : $res = $num;
            return $res;
        }
        
        $month = binary($today['mon']);
        $day = binary($today['mday']);
        $date = $today['year'].'-'.$month.'-'.$day;

        return $date;
    }

    $reminderSQL ="SELECT * FROM tasks WHERE userID = :id AND reminder = :reminder";

    $stmtReminder=$pdo->prepare($reminderSQL);
    $stmtReminder->execute(['id' => $_SESSION['id'], 'reminder' => $reminder]);

    
    if (isset($_GET['login']) && $stmtReminder->rowCount()>=1){
        $tasks = '';
        while($task = $stmtReminder->fetch()){
            $tasks = $tasks."<div id = '$task->taskID' class='row p-2 bg-light justify-content-between align-items-center'>
            <div class='col col-sm-9 d-flex align-items-center'>
                <img title='Priority'class='imgtask mr-4' src='img/projectImages/$task->taskpriority.png' alt='priority'>
                <p class='m-0'>$task->taskname</p>
            </div>
            <div class='col col-sm-3 text-right align-items-center'>
                <p class ='reminder m-0'>$task->reminder</p>
            </div>
        </div>";
        
        
        }




        echo <<< EOT
        <div id="remindertasks" class="d-flex position-fixed justify-content-center align-items-center">

            <div id="divReminder" class="p-3 bg-light col col-lg-5 col-sm-10 rounded">
                <div class="text-right">
                    <i id= "closeremindertasks" class="fa fa-times"></i>
                </div>
                <div class=" mx-4 mb-3">
                    <div class ="d-flex">
                        <img class =" mr-2" id= "dontForget" src="img/projectImages/dontForget.png" alt="picture">
                        <p class ="mb-0 pt-2" id = 'headlineReminder'>Reminder for Today</p>
                    </div>
                    <div class="rounded bg-white w-100">
                    $tasks
                    </div>
                </div>
            </div>
        </div>
        EOT;
    }

?>