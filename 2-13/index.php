<?php

$number1 = 5.4;
$max = 1;


//ceil
echo "切り上げのnumber1は".ceil($number1)."です。";

//floor
echo "切り捨てのnumber1は".floor($number1)."です。";

echo "<br>";

//mt_rand,round
$number2 = mt_rand(1, 9) * 1.1;
if(round($number2) % 2 == 0 ){
    echo "number2は偶数";
}else{
    echo "number2は奇数";
}

echo "<br>";

//pi(),printf
function circle ($d){
    $circle = $d * pi();
    printf ("直径が%dの円周は%dです。",$d,$circle);
}
circle(4);

echo"<br>";

//strlen
$str ="i am hero";
printf("strの文字数は%sです。",strlen($str));

echo"<br>";

//strpos
if (strpos($str,"hero") === false){
    echo"strはheroの文字を持っていません。";
}else{
    echo"strはheroの文字を持っています。";
}

echo"<br>";

//sprintf,substr,strlen
$start_str = sprintf("-".strlen($str));
echo "strの最初の文字は".substr($str,$start_str,1);

echo"<br>";

//str_replace
echo str_replace(" ","",$str);

echo"<br>";
echo"<br>";

echo "1.PostgreSQL,OracleSQL"."<br>";
echo "OracleはNULLを空文字と同一として扱うが、Postgreは別物として扱うなど、細かい点で違いがあり注意が必要。
Oracleは個人使用は無料だが商用はライセンスが必要。Postgreはオープンソース。"."<br>";
echo "2.TortoiseGit,TortoiseSVN"."<br>";
echo "TortoiseGitはGitをより扱いやすくするために開発されたWindows用のソフトウェア。右クリック等GUIでの操作ができる。
Subversionのクライアントフロントエンドとなるソフトウェア。Windowsエクスプローラと直接統合されて動作しエクスぷろーた上からファイルとディレクトリの状態を確認できる。"."<br>";
echo "3.外部設計・内部設計"."<br>";
echo "外部設計は基本設計とも呼ばれ、システムの基本となる設計を行う。セキュリティや運用規約、スケジュールや費用などから、ユーザーインターフェイスの使用など。
内部設計は外部設計をもとにシステム内部の動作や機能、物理データなど、ユーザーから見えにくい詳細な部分の設計を行う。外部設計と詳細設計の間の工程。外部設計の結果をプログラミングしやすくするのが内部設計の役割。"."<br>";

?>