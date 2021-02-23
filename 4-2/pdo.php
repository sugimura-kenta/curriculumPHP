<?php
     //データベース名
    define('DB_DATABASE', 'checktest');
     //MySQLのユーザー名
    define('DB_USERNAME', 'root');
     //MySQLのログインパスワード
    define('DB_PASSWORD', 'root');
     //DSN
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    function connect(){
         try {
             $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
                   //PDOのエラー処理方法の設定
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             return $pdo;
           } catch (PDOException $e) {
            echo 'Error:'.$e->getMessage();
              //データベースの終了
            die();
         }
    }
    
    
?>