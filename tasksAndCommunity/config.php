<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'mytasks');
define('DB_USER', 'root');
define('DB_PWD', '');

$dsn = 'mysql:host='. DB_HOST.';dbname='.DB_NAME;
$pdo = new PDO($dsn, DB_USER, DB_PWD);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);