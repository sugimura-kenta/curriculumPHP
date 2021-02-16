<link rel="stylesheet" href="style2.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
$q1 = [80,22,20,21];
$q2 = ["PHP","Python","JAVA","HTML"];
$q3 = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$a1 = 80;
$a2 = "PHP";
$a3 = "select";
?>
<div class="contents">

    <p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name ;?>さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <form action="answer.php" method="POST">
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->

    <?php foreach ($q1 as $value){ ?>
        <label><input type="radio" name="q1" value="<?php echo $value; ?>"><?php echo $value; ?></label>
    <?php } ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->

    <?php foreach ($q2 as $value){ ?>
        <label><input type="radio" name="q2" value="<?php echo $value; ?>"><?php echo $value; ?></label>
    <?php } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->

    <?php foreach ($q3 as $value){ ?>
        <label><input type="radio" name="q3" value="<?php echo $value; ?>"><?php echo $value; ?></label>
    <?php } ?>

    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    <input type="hidden" name="hidden_name" value="<?php echo $name; ?>">
    <input type="hidden" name="hidden_a1" value="<?php echo $a1; ?>">
    <input type="hidden" name="hidden_a2" value="<?php echo $a2; ?>">
    <input type="hidden" name="hidden_a3" value="<?php echo $a3; ?>">
    <p><input type="submit" value="回答する"></p>
    </form>

</div>
