<?php
        require_once('../config.php');

        $sql_users = "SELECT username FROM user";
        $stmt_users = $pdo->prepare($sql_users);
        $stmt_users->execute();

        $i=1;
        while($user = $stmt_users->fetch()){
                if($stmt_users->rowCount() != $i)
                        $names[] = $user->username.', ';
                else {
                        $names[] = $user->username;
                }
                $i++;
        }

        print_r(json_encode($names));