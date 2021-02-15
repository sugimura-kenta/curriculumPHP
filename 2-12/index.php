<form action="result.php" method="post">
    
    お名前：<input type="text" name="name"><br>
    ご希望商品：
    <input type="radio" value="A賞" name="goods">A賞
    <input type="radio" value="B賞" name="goods">B賞
    <input type="radio" value="C賞" name="goods">C賞
    <br>
     個数：<select name="number">
            <?php for ($i = 1;$i <= 10 ;$i++){ ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php } ?>
            </select>
    <br>
    <input type="submit" value="申込" />
</form>

<?php 

echo"<br>";
echo"<br>";

echo "1.モジュール"."<br>";
echo "人工物の構成要素や部品のうち、内部がより単純な複数の要素で構成され、
それ自体がある程度まとまった何らかの意味のある機能を有するようなものを指す。
ほかの構成要素とつないだり、組み合わせて使用するための規約や仕様が要素自体の
しようとは別に独立して定義されている点も重要。ソフトウェアではソフトジュール、
プログラムモジュールなどと呼ぶことがある。これを組み合わせて全体を構成する手法を「モジュラー型」設計という。"."<br>";
echo "2.バージョン管理システム"."<br>";
echo "データのバージョン管理を行うためのシステム。特定のファイルに対して加えられていく変更を保存し、
後からその当時の状態に戻れるように変更履歴を残す。集中管理方式と分散管理方式がある。"."<br>";
echo "3.サブクエリ"."<br>";
echo "SQLのクエリの中に含まれるクエリ。副問い合わせ"."<br>";

?>