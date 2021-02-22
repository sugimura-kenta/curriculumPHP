<?php
require_once('db_connect.php');
$message ="";
if(isset($_POST["signUp"])) {
    if(isset($_POST["name"]) && isset($_POST["password"])){
        $name = $_POST["name"];
        $password = $_POST["password"];
        $pdo = connect();
        try {
            $sql = "INSERT INTO users (name,password) VALUES (:name,:password)";
            $password_hash = password_hash($password,PASSWORD_DEFAULT);
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':password',$password_hash);
            $stmt->execute();
            $message = "登録が完了しました";
        }catch (PDOException $e) {
            echo'Error:'.$e->getMessage();
            die();
        }
    }else {
        $message = "入力してください";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <p><?php if(isset($message)){ echo $message; } ?></p>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>