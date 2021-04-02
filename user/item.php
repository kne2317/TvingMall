<?php
include "db.php";
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/earlyaccess/notosanskr.css">
		<link rel='icon' type='images/png'href='images/titleLogo.png'>
		<title>넘버원 굿즈샵 TVING MALL</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="item.css?after">

		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="main.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<article>
			<ul>
				<a href="#"><li>장바구니</li></a>
				<a href="#"><li>구매하기</li></a>
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
            <div>
                <?php
                $sql = "select * from item where id=$id";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $name=$row['name'];
                    $img_ad=$row['img_ad'];
                    $price=$row['price'];
                    $sale=$row['sale'];
                    $category=$row['category'];
                    $program=$row['program'];
                    $item_content=$row['item_content'];

                }

                    if($category=="goods")$category="굿즈";
                    else if($category=="movie_goods")$category="방송영화애니굿즈";
                    else if($category=="art_goods")$category="아티스트굿즈";
                    else if($category=="char_goods")$category="캐릭터/웹툰/크리에이터 굿즈";
                    else if($category=="cd_goods")$category="CD/DVD/LP";
                    else if($category=="book_goods")$category="대본집/스토리북";
                    else if($category=="music_goods")$category="악보집";

                    if($category=="fashion") $category="패션";
                    else if($category=="clothes")$category="옷";
                    else if($category=="bag")$category="잡화";
                    else if($category=="jewelry")$category="악세사리";

                    if($category=="beauty")$category="뷰티";
                    else if($category=="care")$category="스킨/케어";
                    else if($category=="makeup")$category="메이크업";
                    else if($category=="hair")$category="미용소품";
                    else if($category=="body") $category="바디/헤어케어";
                    else if($category=="perfume")$category="향수";
                    else if($category=="man")$category="남성뷰티";
                        
                    if($category=="beauty") $category="뷰티";
                    else if($category=="care")$category="스킨/케어";
                    else if($category=="makeup")$category="메이크업";
                    else if($category=="hair")$category="미용소품";
                    else if($category=="body")$category="바디/헤어케어";
                    else if($category=="perfume")$category="향수";
                    else if($category=="man")$category="남성뷰티";

                    if($category=="life") $category="라이프";
                    else if($category=="book")$category="도서";
                    else if($category=="living")$category="리빙";
                    else if($category=="health") $category="생활/건강";
                    else if($category=="food")$category="푸드";
                    else if($category=="design")$category="디자인 문구";
                    else if($category=="ticket")$category="티켓/이용권";
                    else if($category=="sports")$category="레저/스포츠";

                    if($category=="beauty") $category="키즈";
                    else if($category=="kids_book")$category="학습완구/교구/책";
                    else if($category=="kids_boardgame")$category="보드게임";
                    else if($category=="kids_interior")$category="침구/인테리어";
                    else if($category=="kids_doll")$category="인형/장난감";
                    else if($category=="kids_cloth")$category="키즈의류";
                    else if($category=="kids_etc")$category="키즈잡화";
                    else if($category=="kids_baby") $category="이유식용품";
                    else if($category=="kids_water")$category="물놀이용품";
                    else if($category=="kids_safe")$category="위생안전용품";
                    else if($category=="sinby") $category="신비아파트";

                    if($category=="home")$category="가전";
                    else if($category=="design")$category="대형가전";
                    else if($category=="ticket")$category="빔프로젝터";
                    else if($category=="seasonhome")$category="계절가전";
                    else if($category=="kitchenhome")$category="주방가전";
                    else if($category=="lifehome")$category="생활/소형가전";

                    if($category=="digital")$category="디지털";
                    else if($category=="sound")$category="음향기기";
                    else if($category=="food")$category="푸드";
                    else if($category=="camera")$category="카메라";
                    else if($category=="phone")$category="휴대폰액세서리";
                    else if($category=="pc")$category="노트북/PC/태블";
                    else if($category=="pc_etc")$category="PC/노트북주변기기";
                    else if($category=="car")$category="자동차용품";
                ?>
                <p style="padding:1.5em; padding-left:2em;"><?php echo $category;?></p>
                <div id = "item_img"><img src="<?php echo $img_ad;?>"></div>
                <p id="item_name"><?php echo $name;?></p>
                <div id="price_box">
                    <?php
                    if($sale==0){
                        echo "<span class='price'>".$price."원</span>";
                    }else{
                        echo "<span class='item_price'>".$price."원</span>";
                        echo "<span class='item_sale'>".($price-$price*$sale/100)."원</span>";
                        echo "<span class='item_salePrice'>".$sale."%</span>";
                    }
                    ?>
               </div>
               <div id="buy_box">
                   <br>
                   <?php if($program!="") echo "<span>".$program."</span><br><br><br>";?>
                    
                   <a href="#"><div class="buyBtn" style="background-color:darkgray;">장바구니</div></a>
                   <a href="buyItem.php?id=<?php echo $id;?>"><div class="buyBtn" style="background-color:black;">바로구매</div></a>
               </div>
               <div id = "item_cont" style="padding-left:17.5em;margin-top:20em; width:100%; margin:0 auto; padding-top:15em;">
                    <img style="text-align:center"src="<?php echo $item_content;?>" width='800em'>
                </div>
            </div>
        
		</content>
	</body>
</html>