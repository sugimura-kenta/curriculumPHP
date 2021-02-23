<?php 
require('function.php');
check_user_logged_in();
require('pdo.php');
$pdo = connect();
try {
    $sql = "SELECT * FROM books ORDER BY title ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
}catch(PDOException $e){
    echo "Error:".$e->getMessage;
    die();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <title>在庫一覧画面</title>
</head>
<body>
    <div id="wrapper">
        <h1>在庫一覧画面</h1>
        <div class="button">
            <a class="create" href="create_books.php">新規登録</a>
            <a class="logout" href="logout.php">ログアウト</a>
        </div>
        <table class="table">
            <tr>
                <th>タイトル</th>
                <th>発売日</th>
                <th>在庫数</th>
                <th></th>
            </tr>
            <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td><a class="delete" href="delete_book.php?id=<?php echo $row['id']; ?>">削除</a></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>