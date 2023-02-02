<?php

require_once('config.php');

$dsn = 'mysql:host='. DB_HOST.';dbname='.DB_NAME;
$pdo = new PDO($dsn, DB_USER, DB_PWD);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$p = isset($_GET['p']) ? intval($_GET['p']): 0;

$sql = "SELECT * FROM posts LIMIT $p, 10";

$stmt = $pdo->prepare($sql);
				
$stmt->execute();
$data = array();

while($post = $stmt->fetch()){
    $data[] = $post;
}

echo json_encode($data);

?>
