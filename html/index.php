<?php
include('./DB.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Docker_PHP7.2-apache</title>
</head>

<body>
	<!-- ヘッダー -->
	<header>
		<ul>
			<li><a href="http://localhost:8080/">index.phpプレビュー先</a></li>
			<li><a href="http://localhost:4040/index.php?route=/sql&server=1&db=test&table=user&pos=0">phpmyadmin</a></li>
			<li><a href="./DB.php">DBへの接続情報はエディタでこのファイルを見てください</a></li>
		</ul>
	</header>
	<!-- メインコンテンツ -->
	<main>
		<section>
			<div>
				<span>Docker_PHP7.2-apache</span>
			</div>
		</section>
	</main>
	<!-- フッター -->
	<footer></footer>
</body>

</html>