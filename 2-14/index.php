<?php 

$menbers = ["hiromi","arita","kousuke"];
echo count($menbers);
echo "<br>";
sort($menbers);
var_dump($menbers);
if (in_array("arita",$menbers)) {
    echo "有田あり";
}else {
    echo "有田なし";
}
echo"<br>";
$menbersfilm = implode(".and.",$menbers);
var_dump($menbersfilm);
echo"<br>";
$re_menbers = explode(".and.",$menbersfilm);
var_dump($re_menbers);

echo"<br>";
echo"<br>";

echo "1.案件定義（要求仕様書）"."<br>";
echo "開発を依頼するにあたりシステム要件を文章化したもの。要求と予算、開発体制、リリース時期などが記載。"."<br>";
echo "2.単体テスト、結合テスト"."<br>";
echo "単体テストは機能単体で上手く機能できているかのテスト。結合テストはその機能を組み合わせたときに上手く接続できているかのテスト。単体テスト→結合テスト→総合テストと進んでいく"."<br>";
echo "3.テスト仕様書（どのようなもの、項目）"."<br>";
echo "テスト計画、テスト設計をへてテスト仕様書が作られる。テストするポイントをまとめたドキュメント。設計書をもとにテストケースに起こす。設計書にある項目をもとに重要度やテスト区分「正常系」「異常系」なども設定する。
結合テストや総合テストの工程でどの機能を、どのテスト技法を使ってテストするのか記されている。"."<br>";

?>