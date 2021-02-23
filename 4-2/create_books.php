<?php

require_once('pdo.php');

require_once('function.php');

check_user_logged_in();

$message = '';

if (!empty($_POST)) {
    if (empty($_POST["title"])) {
        $message = 'タイトルが未入力です。';
    } elseif (empty($_POST["date"])) {
        $message = '発売日が未入力です。';
    } elseif (empty($_POST['stock'])) {
        $message = '在庫数が未入力です';
    }

    if (!empty($_POST["title"]) && !empty($_POST["date"]) && !empty($_POST['stock'])) {
        
        $title = $_POST["title"];
        $date = $_POST["date"];
        $stock = $_POST['stock'];
        $pdo = connect();

        try {
            $sql = "INSERT INTO books (title,date,stock) VALUES (:title,:date,:stock)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':date',$date);
            $stmt->bindParam(':stock',$stock);
            
            $stmt->execute();
            
            header("Location: main.php");
        } catch (PDOException $e) {
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
    <link rel="stylesheet" href="style5.css">
    <title>newBook登録画面</title>
</head>
<body>
    <div id="wrapper">
        <h1>本 登録画面</h1>
        <p class="message"><?php if(!empty($message)) { echo $message; } ?></p>
        <form action="" method="POST">
            <input type="text" name="title" id="title" placeholder="タイトル">
            <br>
            <input type="text" name="date" id="date" placeholder="発売日(例-2021/2/22)">
            <p>在庫数</p>
            <select name="stock" id="stock">
                <option value="" class="select">選択してください</option>
                <?php for($i = 0;$i <= 100;$i++):?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?> 
            </select>
            <br>
            <input type="submit" name="submit" value="登録" id="submit">
        </form>
    </div>
</body>
</html>