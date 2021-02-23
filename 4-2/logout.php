<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>ログアウト</title>
</head>
<body>
    <div id="wrapper">
        <h1>ログアウト画面</h1>
        <h4>ログアウトしました。<br />ご利用ありがとうございました。</h4>
        <a href="login.php">ログイン画面に戻る</a>
    </div>
</body>
</html>