<?php
/*
DB接続
*/
#DBの接続
function Connect_Db() {
	#宣言
	$host = 'mysql5.7';//ホスト名
	$db = 'test';//データベース名
	$charset = 'utf8';//文字コード
	$dsn = "mysql:host=$host; dbname=$db; charset=$charset";//データソース名
	$user = 'test';//データベースユーザー名
	$pass = 'test';//データベースパスワード

	#処理
	try {
		$Pdo = new PDO($dsn, $user, $pass);//PHP Data Objectsの略で、どのデータベースを使っているかを隠蔽
		// echo '接続成功';
	} catch (PDOException $e) {
		echo '接続失敗'.$e->getMessage();
	}
	return $Pdo;
}

?>