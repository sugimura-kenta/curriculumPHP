<?php
// 作成したdb_connect.phpを読み込む
require_once('db_connect.php');

// 実行したいSQL文を準備
// 今回はusersテーブルにレコードを追加
$sql = "INSERT INTO users (name, password) VALUES ('Taro Yamada', 'taro')";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}


// 実行したいSQL文を準備
$sql = "SELECT * FROM users";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // ループ文を使用して、1行ずつ読み込んで$rowに代入する
    // 読み込むものがなくなったらループ終了
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'] . '、' . $row['name'] . '、' . $row['password'];
        echo '<br />';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

