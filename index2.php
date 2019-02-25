<?php
// 変数の初期化
$res = null;
$pdo_conn = null;
$sql = null;
$date = null;

// 現在の日付を取得
date_default_timezone_set('Asia/Tokyo');
$date = date("Y-m-d");

try {
	// データベースと接続
	$pdo_conn = new PDO( 'pgsql:host=ec2-23-21-165-188.compute-1.amazonaws.com; dbname=d81tl9ncnqmhr0;', 'gyuzauumvdcvqw', '0f44482e44311c9eaf16bb24ab22a891a521054e81c4215ef53a2592e2e3de1b' );	
	// テーブル作成のためのSQL
	$sql = "CREATE TABLE menu (
	id int PRIMARY KEY,
	name varchar(50),
	price int,
	modify_datetime date,
	create_datetime date
)";
	// SQLクエリ実行
	$res = $pdo_conn->query( $sql);
	var_dump($res);
} catch(PDOException $e) {
	var_dump($e->getMessage());
}
// データベースの接続を切断
$pdo_conn = null;

	// データを登録するためのSQLを作成
	$sql = "INSERT INTO menu (
	id, name, price, modify_datetime, create_datetime
) VALUES (
	3, 'ソイラテ', 400, '$date', '$date'	
)";

	// SQLクエリ実行
	$res = $pdo_conn->query( $sql);
	var_dump($res);

} catch(PDOException $e) {

	var_dump($e->getMessage());
}

// データベースの接続を切断
$pdo_conn = null;
