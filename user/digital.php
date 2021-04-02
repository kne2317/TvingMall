<?php
include "db.php";
function item_create($result) {
    while($row = mysqli_fetch_array($result)){
        echo "<div class='best_rank'>";
        ?><a href='item.php?id=<?php echo $row['id'];?>'>
        <?php
                echo "<div class='imgBox'>";
                    echo "<img src='".$row['img_ad']."'>";
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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/earlyaccess/notosanskr.css">
		<link rel='icon' type='images/png'href='images/titleLogo.png'>
		<title>넘버원 굿즈샵 TVING MALL</title>
        <link rel="stylesheet" href="goods.css?after">
        <link rel="stylesheet" href="main.css">

		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="main.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            function togglememo(iObject)  {

                var obj = document.getElementById(iObject);

                var con1 = document.getElementById('item_category_1');
                var con2 = document.getElementById('item_category_2');
                var con3 = document.getElementById('item_category_3');
                var con4 = document.getElementById('item_category_4');

                if (obj != con1)  con1.style.display = "none";
                if (obj != con2)  con2.style.display = "none";
                if (obj != con3)  con3.style.display = "none";
                if (obj != con4)  con4.style.display = "none";


                if (obj.style.display != "none")  
                    obj.style.display = "none" ;
                else  {
                    obj.style.display = ""
                }
            }  
        </script>
        </script>
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
        <div id="big_category">
            <h2>디지털</h2>
        </div>
		<content>
            
            <div id ="nav_category">
                <ul>
                    <a href="javascript:togglememo('item_category_1');"><li>ALL</li></a>
                    <a href="javascript:togglememo('item_category_2');"><li>음향기기</li></a>
                    <a href="javascript:togglememo('item_category_3');"><li>카메라</li>
                    <a href="javascript:togglememo('item_category_4');"><li>휴대폰액세서리</li></a>
                    <a href="javascript:togglememo('item_category_5');"><li>노트북/PC/태블릿</li></a>
                    <a href="javascript:togglememo('item_category_6');"><li>PC/노트북주변기기</li></a>
                    <a href="javascript:togglememo('item_category_7');"><li>자동차용품</li>
                </ul>
            </div>

            <div class="contT2" id="item_category_1">
                <?php
                    $sql = "select * from item where category='digital' 
                    or category='sound' or category='camera' 
                    or category='phone' or category='pc' 
                    or category='pc_etc' or category='car'";

                    $result=mysqli_query($conn, $sql);
                    item_create($result);
                ?>
        </div>
        <div class="contT2" id="item_category_2"style="display:none;">
                <?php
                    $sql = "select * from item where category='sound'";
                    $result=mysqli_query($conn, $sql);
                    item_create($result);
                ?>
        </div>
        <div class="contT2" id="item_category_3"style="display:none;">
                <?php
                    $sql = "select * from item where category='camera'";
                    $result=mysqli_query($conn, $sql);
                    item_create($result);
                ?>
        </div>
        <div class="contT2" id="item_category_4"style="display:none;">
                <?php
                    $sql = "select * from item where category='phone'";
                    $result=mysqli_query($conn, $sql);
                    item_create($result);
                ?>
        </div>
        <div class="contT2" id="item_category_5"style="display:none;">
                <?php
                    $sql = "select * from item where category='pc'";
                    $result=mysqli_query($conn, $sql);
                    item_create($result);
                ?>
        </div>
        <div class="contT2" id="item_category_6"style="display:none;">
                <?php
                    $sql = "select * from item where category='pc_etc'";
                    $result=mysqli_query($conn, $sql);
                    item_create($result);
                ?>
        </div>
        <div class="contT2" id="item_category_7"style="display:none;">
                <?php
                    $sql = "select * from item where category='car'";
                    $result=mysqli_query($conn, $sql);
                    item_create($result);
                ?>
        </div>
        
        </content>

	</body>
</html>