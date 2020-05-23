
	<div class="menu_header">
				<div class="header_menu">
					<ul>
						<li><a href="http://www.dongseo.ac.kr" class="h_last">동서대학교</a></li>
						<?php
							if(!isset($_SESSION["userid"])){
							
						?>
							<li><a href="../login_form">로그인</a></li>
							<li><a href="../insertForm">회원가입</a></li>
							<li><a href="../resources/sdl.hwp">신청서</a></li>
						<?php	
							}
							else
							{
								
						?>

						<li><?=$_SESSION["name"]?> (level : <?=$_SESSION["level"]?>)</li>
						<li><a href="./member/logout">로그아웃</a></li>
						<li><a href="../updateForm.php?id=<?=$_SESSION["userid"]?>">정보수정</a></li>
						<li><a href="#">신청서</a></li>

						<?php
							}
							?>

						
					</ul>
				</div>
			</div>
