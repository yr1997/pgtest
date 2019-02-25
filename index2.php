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
	$pdo_conn = new PDO( 'pgsql:host=localhost; dbname=test;', 'testuser', 'testtest' );	

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
