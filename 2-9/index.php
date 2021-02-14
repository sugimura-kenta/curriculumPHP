<?php

$f = "Fizz!";
$b = "Buzz!";
$fb = "FizzBuzz!!";

for($i=1; $i < 101; $i++) {

    if($i % 3 == 0 && $i % 5 == 0){
        echo $fb;
    }elseif ($i % 3 == 0) {
        echo $f;
    }elseif($i % 5 == 0) {
        echo $b;
    }else {
        echo$i;
    }
    echo "<br>";

}

echo"<br>";
echo"<br>";

echo "1.パフォーマンス"."<br>";
echo "システムやその部品がどの程度機能するのか、成果を発揮するのかなど性能の度合いを示す言葉"."<br>";
echo "2.スロークエリ"."<br>";
echo "データベースにおいて時間のかかっているSQLのこと。だいたい2秒以上。"."<br>";
echo "3.クエリログ"."<br>";
echo "サーバーが実行した全てのSQLクエリを出力してくれる。ログには種類があり、役割や用途がある。"."<br>";

?>