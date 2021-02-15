<form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name ="email" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>

  <input type="submit" value="送信" />
</form>

<?php
echo"<br>";
echo"<br>";

echo "1.仕様書・設計書"."<br>";
echo "案件定義や基本設計で顧客と作るのが仕様書。詳細設計で作るのが設計書。"."<br>";
echo "2.Git"."<br>";
echo "バージョン管理システムの一つ。ファイルを変更したい場合はファイルを借りる。（チェックアウト）変更したら返す（チェックイン）。チェックインのタイミングで変更点をリポジトリに記録してくれる。"."<br>";
echo "3.マージツール"."<br>";
echo "FDLファイル又はDTDファイルの変更内容をMDLファイルにマージできる。マージは複数のプログラムやデータ、ファイルを一つに統合すること。開発中のプログラムなどに新しくコードを追加したり修正を反映させたりする操作。"."<br>";
?>