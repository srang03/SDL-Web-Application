<?php
  $id = $_REQUEST["id"];
  $pass = $_REQUEST["pass"];
  $name = $_REQUEST["name"];
  $hp1 = $_REQUEST["hp1"];
  $hp2 = $_REQUEST["hp2"];
  $hp3 = $_REQUEST["hp3"];
  $email1 = $_REQUEST["email1"];
  $email2 = $_REQUEST["email2"];
  $hp = $hp1."-".$hp2."-".$hp3;
  $email = $email1."@".$email2;

  require_once("../lib/MYDB.php");  
  $pdo = db_connect();   
 
  try{
      $pdo->beginTransaction();   
      $sql = "insert into chna03.user VALUES(?, ?, ?, ?, ?, now(), 1)"; 
      $stmh = $pdo->prepare($sql); 
      $stmh->bindValue(1, $id, PDO::PARAM_STR);  
     $stmh->bindValue(2, $pass, PDO::PARAM_STR);   
     $stmh->bindValue(3, $name, PDO::PARAM_STR);
     $stmh->bindValue(4, $hp, PDO::PARAM_STR);
     $stmh->bindValue(5, $email, PDO::PARAM_STR);
     
 
     $stmh->execute();
     $pdo->commit();  
     
   	header("Location:http://chna03.dothome.co.kr/index");
   } catch (PDOException $Exception) {
         $pdo->rollBack();
         print "오류: ".$Exception->getMessage();
   }
 ?>
