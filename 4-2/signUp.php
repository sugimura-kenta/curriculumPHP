<?php
require_once('pdo.php');

$message = "";

if(isset($_POST['signUp'])){
    if(empty($_POST['name']) && empty($_POST['password'])){
        $message = "ユーザ名、パスワードを入力してください。";
    }elseif(empty($_POST['name'])){
        $message = "ユーザー名を入力してください。";
    }elseif(empty($_POST['password'])){
        $message = "パスワードを入力してください。";
    }

    if(!empty($_POST['name']) && !empty($_POST['password'])) {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $pdo = connect();
        try {
            $sql = "INSERT INTO users (name,password) VALUES (:name,:password)";
            $password_hash = password_hash($password,PASSWORD_DEFAULT);
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':password',$password_hash);
            $stmt->execute();
            header("Location: login.php");
        }catch (PDOException $e) {
            echo "Error:".$e->getMessage();
            die();
        }
    }

}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>ユーザー登録画面</title>
</head>
<body>
    <div id="wrapper">
        <p class="message"><?php if(isset($message)){echo $message;} ?></p>
        <h1>ユーザー登録画面</h1>
        <form method="POST" action="">
            <input type="text" name="name" id="name" placeholder="ユーザー名">
            <br/>
            <input type="password" name="password" id="password" placeholder="パスワード">
            <br/>
            <input type="submit" name="signUp" value="新規登録" id="signUp" >
        </form>
    </div>
    </body>
</html>