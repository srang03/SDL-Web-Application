	<link rel="stylesheet" href="css/style.css">
	
	<script src="js/slidermenu.js"></script>
<div class="menubar">
				<div class="logo_div">
					<h3><a href="http://www.dongseo.ac.kr"><img src="img/dsu_logo.jpg" alt=""></a><a href="../index" class="logo">SDL</a></h3>
				</div>
				<div class="dropdown_all">
					<div class="dropdown" style="float:left;">
						<div class="dropbtn">연구실소개</div>
						<div class="dropdown-content" style="left:0;">
							<a href="../labintro">연구실 소개</a>							
							<a href="../student">학생명단</a>
							<a href="../labaward">수상내역</a>
							<a href="../map">오시는길</a>
						</div>
					</div>
					<div class="dropdown" style="float:left;">
						<button class="dropbtn">연구실소식</button>
						<div class="dropdown-content" style="left:0;">
							<a href="../notice">공지사항</a>
							<a href="../labactivity">연구실 활동</a>

						</div>
					</div>
					<div class="dropdown" style="float:left;">
						<button class="dropbtn">연구실일정</button>
						<div class="dropdown-content" style="left:0;">
							<a href="../schedule">캘린더</a>

						</div>
					</div>
					<div class="dropdown" style="float:left;">
						<button class="dropbtn">커뮤니티존</button>
						<div class="dropdown-content" style="left:0;">
							<a href="../freeboard">자유게시판</a>
							<a href="../qnalist">Q & A</a>

						</div>
					</div>
				</div>
			</div>

				<div class="navbar">
				<span class="open-slide">
					<a href="#" onclick="openSlideMenu()">
						<svg width="30" height="30">
							<path d="M0,5 30,5" stroke="#dbdbdb" stroke-width="5"/>
							<path d="M0,14 30,14" stroke="#dbdbdb" stroke-width="5"/>
							<path d="M0,23 30,23" stroke="#dbdbdb" stroke-width="5"/>
							<!-- 햄버거 메뉴 -->
						</svg>
					</a>
				</span>
				<!-- 햄버거 메뉴 -->
			</div>
			<div id="side-menu" class="side-nav">
				<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
				<!-- x 버튼 -->
				<div class="slider_menu">
					<ul class="slide_title"><b>전체메뉴</b></ul>

					<div class="slider_menu_t">	
						<label for="toggle1" class="toggle1" onclick>연구실 소개</label>
						<input type="checkbox" id="toggle1"/>
						<ul class ="slider_menu_s">
							<li><a class="slider_menu_s_a" href="labintro">연구실 소개</a></li>
							<li><a href="student" class="slider_menu_s_a">소속 학생 명단</a></li>
							<li><a href="labaward" class="slider_menu_s_a">수상내역</a></li>
							<li><a href="map" class="slider_menu_s_a">오시는 길</a></li>
						</ul>
					</div>
				</div>
				<div class="slider_menu">
					<div class="slider_menu_t">
						<label for="toggle2" onclick>연구실 소식</label>
						<input type="checkbox" id="toggle2"/>
						<ul class ="slider_menu_s">
							<li><a href="notice" class="slider_menu_s_a">공지사항</a></li>
							<li><a href="labactivity" class="slider_menu_s_a">연구실 활동</a></li>
						</ul>
					</div>
				</div>
				<div class="slider_menu">
					<div class="slider_menu_t">
						<label for="toggle3" onclick>연구실 일정</label>
						<input type="checkbox" id="toggle3"/>
						<ul class ="slider_menu_s">
							<li><a href="schedule" class="slider_menu_s_a">캘린더</a></li>
						</ul>
					</div>
				</div>
				<div class="slider_menu">
					<div class="slider_menu_t">
						<label for="toggle4" onclick>커뮤니티존</label>
						<input type="checkbox" id="toggle4"/>
						<ul class ="slider_menu_s">
							<li><a href="freeboard" class="slider_menu_s_a">자유게시판</a></li>
							<li><a href="qnalist" class="slider_menu_s_a">Q & A</a></li>
						</ul>
					</div>
				</div>
			</div>