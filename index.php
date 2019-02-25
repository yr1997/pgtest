<?php

// 変数の初期化
$sql = null;
$res = null;
$dbh = null;

try {
	// DBへ接続
	$dbh = new PDO( 'pgsql:host=ec2-23-21-165-188.compute-1.amazonaws.com; dbname=d81tl9ncnqmhr0;', 'gyuzauumvdcvqw', '0f44482e44311c9eaf16bb24ab22a891a521054e81c4215ef53a2592e2e3de1b' );
	// SQL作成
	$sql = "SELECT * FROM user_list";

	// SQL実行
	$res = $dbh->query($sql);

	// 取得したデータを出力
	foreach( $res as $value ) {
		echo "$value[name]<br>";
	}

} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// 接続を閉じる
$dbh = null;



