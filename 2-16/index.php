<?php

    $testFile = "test.txt";
    $contents = "こんにちは！";

    if (is_writable($testFile)) {
        
        $fp = fopen($testFile,"a");
        fwrite($fp,$contents);
        fclose($fp);
        
        echo"finish writable!!";
    } else {
        echo "not writable!";
        exit;
    }

    $test_file = "test2.txt";
    if (is_readable($test_file)) {
        $tfp = fopen($test_file,"r"); 
        while ($line = fgets($tfp)) {
            echo $line.'<br>';
        }
        fclose($tfp);
    } else {
        echo "not readable!";
        exit;
    }

    echo"<br>";
    echo"<br>";
    
    echo "1. CakePHPの2系・3系の違い"."<br>";
    echo "2系に比べ3系は速度が速く、使える機能が多くなった。拡張性や可読性も上がり配列が書きやすくなった。
    2系のmodelクラスがTableとEntityの2つに分離された。そのため、2系から3系に移るときModel関係は0から作り直す必要がある。また学習コストも2系より3系のほうが高い。"."<br>";
    echo "2.LAMP"."<br>";
    echo "Linux,Apache,MySQL(MariaDB),PHP(Perl,Python)で構成される、データベースを活用したWebアプリケーションを開発・運用するのに適した環境のオープンソースソフトウェアの組み合わせ。XAMPPやLAPP等"."<br>";
    echo "3.AWS"."<br>";
    echo "Amazon Web Servicesの略。Amazonが提供している100以上のクラウドコンピューティングサービスの総称。クラウドコンピューティングサービスとはインターネットを介してサーバー・ストレージ・データベース
    ・ソフトウェアといったコンピューターを使った様々なサービスを利用すること。クラウドコンピューティングではサーバー機器を設置する手間がなく、PCとネット環境があれば利用できる。サーバー環境構築、データ保存、
    コンテンツ配信、データベース利用、専用回線、セキュリティ対策やAI活用・データ分析、ワークフロー管理、メール/通知、開発補助等さまざまなサービスがある。
    サービスが多いため、選択に相応のノウハウが必要。"."<br>";

?>