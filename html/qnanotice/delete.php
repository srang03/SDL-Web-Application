<?php
	session_start();
	$num=$_REQUEST["num"];
	$page=$_REQUEST["page"];

	require_once("../lib/MYDB.php");
	$pdo=db_connect();

	

	try{
		$pdo->beginTransaction();
		$sql = "delete from chna03.qna where num = ?";
		$stmh = $pdo->prepare($sql);
		$stmh->bindValue(1,$num,PDO::PARAM_STR);
		$stmh->execute();
		$pdo->commit();

		header("Location:http://chna03.dothome.co.kr/qnalist.php");
	
	}catch (Exception $ex){
		$pdo->rollBack();
		print "오류: ".$Exception->getMessage();
	}