<?php 

require_once('pdo.php');
require_once('function.php');

check_user_logged_in();

$id = $_GET['id'];

redirect_main_unless_parameter($id);

$pdo = connect();

try {
    $sql = "delete from books where id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    header("Location: main.php");
}catch (PDOException $e){
    echo "Error:".$e->getMessage();
    die();
}

?>