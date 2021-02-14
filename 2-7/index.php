<?php

$color = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($color);
echo "<br>";
$color["yellow"] = "黄色";
var_dump($color);

echo "<br>";
echo "<br>";

echo "1.プルリクエスト（マージリクエスト）"."<br>";
echo "マージ前に開発者のローカルリポジトリでの変更をほかの開発者に通知する機能。変更箇所も表示。コードレビューがしやすくなる"."<br>";
echo "2.Git Flow"."<br>";
echo "チームでGitを使う際に役立つ運用ルールをまとめたツール。「master」と「develop」の2本柱と「Feature branches」「Release branches」
「Hotfix branches」の３種の補助柱を設けてブランチの運用を手助けする"."<br>";
echo "3.CRON"."<br>";
echo "Linux等に入っているプログラム。「crontab」というコマンドを使い指定した時間に指定したプログラムを自動的に実行するもの。"."<br>";

?>