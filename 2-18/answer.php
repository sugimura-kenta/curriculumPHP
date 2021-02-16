<link rel="stylesheet" href="style3.css">
<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["hidden_name"];
$a1 = $_POST["hidden_a1"];
$a2 = $_POST["hidden_a2"];
$a3 = $_POST["hidden_a3"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function checkTheAnswer ($a ,$q){
    if ($a == $q){
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}
?>
<div class="contents">

    <p><!--POST通信で送られてきた名前を表示--><?php echo $name ?>さんの結果は・・・？</p>
    
    <p>①の答え</p>
    
    <!--作成した関数を呼び出して結果を表示-->
    <?php checkTheAnswer($a1,$q1); ?> 
    
    <p>②の答え</p>
    
    <!--作成した関数を呼び出して結果を表示-->
    <?php checkTheAnswer($a2,$q2); ?>
    
    <p>③の答え</p>
    
    <!--作成した関数を呼び出して結果を表示-->
    <?php checkTheAnswer($a3,$q3); ?>

</div>