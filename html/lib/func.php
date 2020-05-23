<?php
function latest_article($table, $loop, $char_limit)
{
	require_once("./lib/MYDB.php");
	$pdo = db_connect();

	try{
		$sql="select * from chna03.$table order by num desc limit $loop"; // $table = 어느 테이블에서, $loop = 제일 최근에 작성된  몇가지 항목을 가지고 올 것 인가?
		$stmh=$pdo->query($sql);

		while($row = $stmh->fetch(PDO::FETCH_ASSOC))
		{
			$num=$row["num"];
			$len_subject=strlen($row["subject"]); // 몇글자가 저장 되었는가?
			$subject=$row["subject"];

			if($len_subject>$char_limit)
			{
				$subject=mb_substr($row["subject"], 0, $char_limit, 'utf-8'); // mb_substr (4개의 인자) = 문자열 중에 중간 영역을 줄여서 가져옴. 한글 = 15 글자 , 영어 = 30 글자
				$subject=$subject."..."; // 문자가 더있을 시 ... 표시
			}
			$regist_day=substr($row["regist_day"], 0, 10);

			echo("
				<div class='col1'>
				<a href='notice_view.php?num=$num'>$subject</a>
				</div><div class='col2'>$regist_day</div>
				<div class='clear'></div>
				");
		}
	} catch (PDOException $Exception) {
		print "오류: ".$Exception->getMessage();
	}
}	
?>