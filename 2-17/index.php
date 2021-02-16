<?php

$count = 0;
$number = 0;

while ($number < 40) {
    $count++;
    $rand = mt_rand(1,6);
    echo $count."回目＝".$rand;
    $number += $rand;
    echo "<br>";
    if ($number >= 40){
        echo "合計".$count."回でゴールしました";
        echo "<br>";
    }
}


date_default_timezone_set('Asia/Tokyo');
$time = intval(date('H'));
echo "今".$time."時台です。";
echo "<br>";
if( 6 <= $time && $time < 12 ){
    echo "おはようございます";
} elseif(12 <= $time && $time < 18)  {
    echo "こんにちは";
} else {
    echo "こんばんは";
}

?>