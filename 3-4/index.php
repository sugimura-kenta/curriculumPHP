<?php
    require_once('getData.php');
    $userName = "";
    $userLogin = "";
    $getData = new getData();

    $user = $getData->getUserData();
    $name = $user["last_name"].$user["first_name"];
    $loginData = $user["last_login"];
    $postData = $getData->getPostData();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <img class="image" src="logo.png" alt="ロゴ" height="">
            <div class="name-log">
                <div class="name">ようこそ<?php echo $name ?>さん</div>
                <div class="login">最終ログイン日：<?php echo $loginData ?></div>
            </div>
        </div>
        <div class="contents">
            <table class="table">
                <tr>
                    <th>記事ID</th>
                    <th>タイトル</th>
                    <th>カテゴリ</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>
                <?php while ($row = $postData->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <?php if($row['category_no'] == 1): ?>
                            <td>食事</td>
                        <?php elseif($row['category_no'] == 2):?>
                            <td>旅行</td>
                        <?php else:?>
                            <td>その他</td>
                        <?php endif; ?>
                        <td><?php echo $row['comment'];?></td>
                        <td><?php echo $row['created'];?></td>
                    </tr>
                <?php endwhile ?>
            </table>
        </div>
        <div class="footer">
            <p>Y&I Group.inc</p>
        </div>
    </div>
</body>
</html>