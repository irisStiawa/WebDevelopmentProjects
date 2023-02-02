<?php
    session_start();

    require_once('../config.php');

    $array = [];

    $sql = "SELECT * FROM tasks WHERE userID = $_SESSION[id]";
    $tasks = $pdo->prepare($sql);
    $tasks->execute(); 

    while($task = $tasks->fetch()){
        $array[]= $task;
    }

    print_r(json_encode($array));


