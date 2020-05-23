<?php
	session_start();
	unset($_SESSION["userid"]);
	unset($_SESSION["name"]);
	unset($_SESSION["level"]);
	header("Location:http://chna03.dothome.co.kr/index");
	?>