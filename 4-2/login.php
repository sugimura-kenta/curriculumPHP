<?php
require_once('pdo.php');
session_start();

$message = "";

if(!empty($_POST)){
    if(empty($_POST['name']) && empty($_POST['password'])){
        $message = "ユーザー名、パスワードを入力してください";
    }elseif(empty($_POST['name'])){
        $message = "ユーザー名を入力してください";
    }elseif (empty($_POST['password'])) {
        $message = "パスワードを入力してください";
    }

    if(!empty($_POST['name']) && !empty($_POST['password'])){
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $pdo = connect();
        try {
            $sql = "SELECT * FROM users WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($pass, $row['password'])) {
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];

                header("Location: main.php");
                exit;
            } else {
                $message =  "パスワードに誤りがあります。";
            }
        } else {
            $message = "ユーザー名かパスワードに誤りがあります。";
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
    <link rel="stylesheet" href="style2.css">
    <title>ログイン画面</title>
</head>
<body>
    <div id="wrapper">
        <p class="message"><?php if(isset($message)){echo $message;} ?></p>
        <br />
        <div class="top">
            <h1>ログイン画面</h1>
            <a href="signUp.php">新規ユーザー登録</a>
        </div>
        <form method="POST" action="">
            <input type="text" name="name" id="name" placeholder="ユーザー名">
            <br/>
            <input type="password" name="password" id="password" placeholder="パスワード">
            <br/>
            <input type="submit" name="login" value="ログイン" id="login" >
        </form>
    </div>
</body>
</html>