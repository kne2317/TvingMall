<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/earlyaccess/notosanskr.css">
		<link rel='icon' type='images/png'href='images/titleLogo.png'>
		<title>넘버원 굿즈샵 TVING MALL</title>
		<link rel="stylesheet" href="main.css">

		<link rel="stylesheet" href="bxSlider.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  		<script src="bxSlider.js"></script>
		  <script src="main.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
	</head>
	<body>
		<article>
			<ul>
				<a href="#"><li>히스토리</li></a>
				<a href="#"><li>브랜드샵</li></a>
				<a href="#top"><li>TOP</li></a>
			</ul>
		</article>
		<header id="top">
			<div>
				<ul id="top_ul1">
					<li><a href="#">NEW</a></li>
					<li><a href="#">BEST</a></li>
					<li><a href="#">REVIEW</a></li>
					<li><a href="#">SALE</a></li>
					<li><a href="#">기획전</a></li>
				</ul>
				<ul id="top_ul2">
					<?php
					session_start();
					if(isset($_SESSION['user_name'])){
						echo "<li><a id='user_name'>{$_SESSION['user_name']} 님</a></li>";
						echo "<li><a href='logout.php'>로그아웃</a></li>";
					}else{
					?>
						<li><a href="login.html">로그인</a></li>
						<li><a href="join.html">회원가입</a></li>
					<?php
					}
					?>
					<li><a href="#"><img src="images/shop_bag.png" width="20em"></a></li>
					<li><a href="#"><img src="images/search.png"width="20em"></a></li>
				</ul>
			</div>
			
		</header>
		</div>
		<div id="logo">
			<a href="main.php"><img src="images/mainLogo.png" width="15%"></a>
		</div>
		<nav>
			<ul id="nav_ul1">
				<li id="program_nav_ul1"><a href="#">PROGRAM</a></li>
				<li><a href="#">BRAND</a></li>
				<li><a href="#">#신묘한달력</a></li>
				<li><a href="#">#써치</a></li>
			</ul>
			
			<ul>
				<li>|</li>
				<li><a href="goods.php">굿즈</a></li>
				<li><a href="fashion.php">패션</a></li>
				<li><a href="beauty.php">뷰티</a></li>
				<li><a href="life.php">라이프</a></li>
				<li><a href="kids.php">키즈</a></li>
				<li><a href="home.php">가전</a></li>
				<li><a href="digital.php">디지털</a></li>
			</ul>
		</nav>
		<div id="nav_program" >
    		<div class="nav_program_wrap">
               <div><a href="#">나는 살아있다</a></div>
               <div><a href="#">산후조리원</a></div>
               <div><a href="#">시그널</a></div>
               <div><a href="#">미스터 썬샤인</a></div>
               <div><a href="#">바닷길 선발대</a></div>
            </div>
            <div class="nav_program_wrap">
               <div><a href="#">신서유기8</a></div>
               <div><a href="#">쇼미더머니9</a></div>
               <div><a href="#">지혜로운 소비생활</a></div>
               <div><a href="#">스타트업</a></div>
               <div><a href="#">써치</a></div>
            </div>
            <div class="nav_program_wrap">
                <div><a href="#">구미호뎐</a></div>
                <div><a href="#">스튜디오 겟잇뷰티</a></div>
                <div><a href="#">경우의 수</a></div>
                <div><a href="#">18 어게인</a></div>
                <div><a href="#">신비아파트</a></div>
            </div>
            <div class="nav_program_wrap">
                <div><a href="#">청춘기록</a></div>
                <div><a href="#">비밀의 숲2</a></div>
                <div><a href="#">신박한 정리</a></div>
                <div><a href="#">사이코지만괜찮아</a></div>
                <div><a href="#">아이즈원츄 - 환상캠퍼스</a></div>
            </div>
            <div class="nav_program_wrap">
                <div><a href="#">번외수사</a></div>
                <div><a href="#">화양연화</a></div>
                <div><a href="#">슬기로운 의사생활</a></div>
                <div><a href="#">이태원 클라쓰</a></div>
                <div><a href="#">사랑의 불시착</a></div>
        	</div>
        
		</div>
		<br>
		<content>
			<div id="gallary">
				<ul class="bxslider">
					<li><a href="#"><img src="images/bx_2.png"/></a></li>
    				<li><a href="#"><img src="images/bx_1.png"/></a></li>
		    		<li><a href="#"><img src="images/bx_3.png"/></a></li>
		    		<li><a href="#"><img src="images/bx_4.png"/></a></li>
		    		<li><a href="#"><img src="images/bx_5.png"/></a></li>
		    		<li><a href="#"><img src="images/bx_6.png"/></a></li>

				</ul>
			</div>

			<div id="content1">
				<a href="#"><div><img src="images/banner_1.png" width="425em" /></div></a>
				<a href="#"><div><img src="images/banner_2.png"width="425em"/></div></a>
				<a href="#"><div><img src="images/banner_3.png"width="425em"/></div></a>
			</div>

			<div id="content2">
				<div id="contT1">
					<span>추천 상품 15</span>
					<a href="#"><div>더보기</div></a>
				</div>

				<div id="contT2">
					<?php
					
						$sql = "select COUNT(*) FROM item";
						$cnt=mysqli_query($conn, $sql);
						$row= $cnt->fetch_row();
						$max=$row[0];
						for($i=1; $i<=15; $i++){
							
							$num = mt_rand(1, $max) ;
							$sql = "select * from item where id=$num";
							$result=mysqli_query($conn, $sql);
							
							while($row = mysqli_fetch_array($result)){
								echo "<div class='best_rank'>";
								?><a href='item.php?id=<?php echo $row['id'];?>'>
								<?php
										echo "<div class='imgBox'>";
											echo "<img src='".$row['img_ad']."'>";
											echo "<div class='rankBox'>";
												echo "<div class='rankNum'>".$i."</div>";
											echo "</div>";
										echo "</div>";
		
										echo "<div class='itemInfo'>";
										echo "<div class='item_name'>".$row['name']."</div>";
								if($row['sale']==0){
									echo "<span class='price'>".$row['price']."원</span>";
											
								}else{
									echo "<span class='item_price'>".$row['price']."원</span>";
									echo "<span class='item_salePrice'>".$row['sale']."%</span>";
									echo "<span class='item_sale'>".($row['price']-$row['price']*$row['sale']/100)."원</span>";
								}
								echo"</div></a></div>";
							}
						}
					?>
				</div>
			</div>
			<div id="promotion">
				<a href="#"><img src="images/promotion1.png" width="50%"></a>
				<a href="#"><img src="images/promotion2.png"width="50%"></a>
			</div>

			<div id="hotClip" style="display: block;">
				<div id="contT1" style="width: 80%; margin: 0 auto; padding: 3em; ">
					<span>TVING HOT CLIP</span>
					<a href="#"><div style="border: 1px solid #595854;">더보기</div></a>
				</div>
				<div id="programName">
					<ul>
						<a href="#"><li>신서유기8</li></a>
						<a href="#"><li>구미호뎐</li></a>
						<a href="#"><li>스타트업</li></a>
						<a href="#"><li>산후조리원</li></a>
						<a href="#"><li>신박한 정리</li></a>
						<a href="#"><li>써치</li></a>
					</ul>
				</div>
				<div id="program">
					<div style="float: left;">
						<iframe width="450" height="240" src="https://www.youtube.com/embed/X_hNZSYz4qE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<br>
						<span>[신서유기8]</span>
						<br>
						<p>[딸기게임]고장난 선풍기 아니고 16비트 딸기 수근입니다. #신서유기8 #하이라이트#신서유기8 | tvnbros8 EP.5</p>
					</div>
					<div style="float: left; margin-left: 2em;" >
						<iframe width="450" height="240" src="https://www.youtube.com/embed/ASVZPcw3W2c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<br>
						<span>[신서유기8]</span>
						<br>
						<p>[하이라이트] 나PD멱살잡고 장학퀴즈 찢어버린 폭주 은지원(여의도 증권가 출신) #신서유기8 | tvnbros8 EP.2</p>
					</div>
					<div style="float: right;">
						<iframe width="450" height="240" src="https://www.youtube.com/embed/hS6EGdTtdiQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<br>
						
						<span>[신서유기8]</span>
						<p>[하이라이트] 우리 모두 고운우리말♥을 지켜요#신서유기 8 | tvnbros8 EP.3</p>
					</div>
				</div>
			</div>
			<footer style="position: relative;margin-top: 43em;">
				<div id="foot1" >
					<a href="#"><span style="margin-right: 5em;">공지사항 + </span></a>
					<span>티빙몰 고객센터</span>
					<span style="color: red; padding-right: 0;">1670-1525</span>
					<span style="padding-left: 0; line-height: 2.5em; font-size: 0.8em; font-weight: normal; color: gray;">(평일 09시 ~ 18시)</span>
				</div>
				<div id="foot2">
					<ul style="width: 70%; margin:0 auto; margin-bottom: 3.5em;">
						<a href="#"><li>티빙소개</li></a>
						<a href="#"><li>고객센터</li></a>
						<a href="#"><li>FAQ</li></a>
						<a href="#"><li>이용약관</li></a>
						<a href="#"><li>개인정보처리방침</li></a>
						<a href="#"><li>청소년 보호정책</li></a>
						<a href="#"><li>제휴/입점/광고 문의</li></a>
						<a href="#"><li>티빙메인 바로가기</li></a>
						<a href="#" style=""><li>f</li></a>
						<a href="#"><li>브랜드 바로가기</li></a>
						<a href="#"><li>계열사 바로가기</li></a>
					</ul>
					<hr style="color: lightgray; height: 0.1px;">
					<p style="margin-top: 2em;">대표이사 : YANG JIEUL | 사업자정보확인 | 개인정보관리책임자 고창남 | 사업자등록번호 188-88-01893 | 통신판매신고번호 2020서울마포3641호</p>
					<p>서울 마포구 상암산로 34 (상암동) 15층(상암동, DMC디지털큐브) 주식회사 티빙 | 호스팅제공자: CJ올리브네트웍스 | 고객센터 1670-1525(평일 09시 ~ 18시) | 대표메일 tving.mall@cj.net</p>
					<p style="margin-bottom: 3em;">Copyright (C) TVING All rights reserved.</p>

				</div>

			</footer>

		</content>
	</body>
</html>