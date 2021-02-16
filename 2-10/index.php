<?php

function getVolume($Vertical,$horizontal,$height) {
    $volume  = $Vertical * $horizontal * $height / 2;
    return $volume."cm³";
}

echo getVolume(5,10,8);

echo"<br>";
echo"<br>";

echo "1.ハッシュ化"."<br>";
echo "パスワード等重要な情報を保存する際にセキュリティ強化のためハッシュ化し保存する。ハッシュ化とは値をハッシュ関数に入れる処理。ハッシュ値は元のデータを特定できない。同じ値なら同じハッシュ値になる。"."<br>";
echo "2.総合テスト"."<br>";
echo "システムテスト。開発側の最終テスト。システムが要件を見たいていることを検証する。"."<br>";
echo "3.デバッグ"."<br>";
echo "バグと呼ばれるプログラムや関数の間違いを見つけ、それらを排除する作業のこと。"."<br>";

?>