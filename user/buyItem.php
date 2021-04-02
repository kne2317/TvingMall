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

		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="main.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <style>
            td{
                padding:4em;
                text-align:center;
            }
        </style>
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
                $sql = "select * from item where id='$id'";
                $result=mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                    $name=$row['name'];
                    $img_ad=$row['img_ad'];
                    $price=$row['price'];
                    $sale=$row['sale'];
                    $category=$row['category'];
                    $program=$row['program'];
                    $reprice= $price-$price*$sale/100;
                }
                ?>
                <div style="width: 100%;margin: 0 auto;padding: 1em;padding-left: 20.5em;background-color:#dcd7d0;">
                    <h3>주문/결제</h3>
                </div>
                <h3 style="padding-left:17em; margin-top:3em;">주문 상품 정보</h3>
                <div style=" width: 100%;margin: 0 auto;padding: 1em;padding-left: 20.5em; border:1px solid light gray;">
                    <table> 
                    <tr> 
                        <th></th> 
                        <th>주문상품정보</th>
                        <th>상품가</th> 
                        <th>수량</th> 
                        <th>구매가</th>
                        <th>배송정보</th>

                    </tr>
                            <tr>
                                <td><?php echo "<img src='". $img_ad."' width='80px'>";?></td>
                                <td><?php 
                                if(mb_strlen($name)>20){
                                    echo  mb_substr($name,0,20)."...";
                                }else{
                                    echo  $name;
                                }
                                
                                ?></td>
                                <td><?php echo  $price;?></td>
                                <td><?php echo "1"?></td>
                                <?php
                                if($row['sale']==0){
                                ?>
                                <td><?php echo  $reprice;?></td>
                                <?php }else{?>
                                <td><?php echo $reprice.'원';}?></td>
                                <td>배송비 <br>3000원</td>
                            </tr>
                    </table>
                    <form method="post" action="#">
                        <h3 style="margin-top:1em; margin-bottom:1em;">주문자 정보</h3>
                        <div style="width:80%; border:1px solid lightgray; padding:2em;">
                            <h4 style="float:left; padding-top:0.7em;">이름</h4> 
                            <input required type="text"name="name"  style="border: 1px solid lightgray; display:block; padding: 1em; width: 25em;margin-left:7em; margin-bottom:2em;">
                            <h4 style="float:left; padding-top:0.7em;">이메일</h4> 
                            <input required type="text"name="email"  style="border: 1px solid lightgray; display:block; padding: 1em; width: 25em;margin-left:7em;margin-bottom:2em;">
                            <h4 style="float:left; padding-top:0.7em;">휴대폰</h4> 
                            <select name="ph" style="padding:1em;  margin-left:3.7em;  margin-bottm:2em;margin-right:2em;width:6em; float:left;">
                                <option value="010">010</option><option value="011">011</option><option value="016">016</option><option value="017">017</option>
                                <option value="018">018</option><option value="019">019</option><option value="070">070</option><option value="0130">0130</option>
                                <option value="0303">0303</option><option value="0502">0502</option><option value="0504">0504</option><option value="0505">0505</option>
                                <option value="0506">0506</option>
                            </select>
                            <input required type="text"name="ph1"  style="float:left;border: 1px solid lightgray; display:block; padding: 1em; width: 7em;margin-right:2em; margin-bottm:2em;">
                            <input required type="text"name="ph2"  style="border: 1px solid lightgray; display:block; padding: 1em; width: 7em;margin-right:2em; margin-bottm:2em;">
                            
                        </div>

                        <h3 style="margin-top:1em;margin-bottom:1em;">배송지 정보</h3>
                        <div style="width:80%; border:1px solid lightgray; padding:2em;">
                            <h4 style="float:left; padding-top:0.7em;">배송지명</h4> 
                            <input required type="text"name="ad_name"  style="border: 1px solid lightgray; display:block; padding: 1em; width: 25em;margin-left:7em; margin-bottom:2em;">
                            <h4 style="float:left; padding-top:0.7em;">받는 분</h4> 
                            <input required type="text"name="get_name"  style="border: 1px solid lightgray; display:block; padding: 1em; width: 25em;margin-left:7em;margin-bottom:2em;">
                            <h4 style="float:left; padding-top:0.7em;">배송주소</h4> 
                            <input required type="text"name="adress"  style="border: 1px solid lightgray; display:block; padding: 1em; width: 25em;margin-left:7em; margin-bottom:2em;">
                            <h4 style="padding-top:0.7em; margin-bottom:1em;">배송 요청사항</h4> 
                            <select name="excuse" style="padding:1em;   margin-bottm:2em;margin-right:2em;width:30em;margin-bottom:2em;">
                                <option value="m1">부재시 경비실에 맡겨주세요.</option>
                                <option value="m2">부재시 문앞에 놓아주세요.</option>
                                <option value="m3">베송 전에 연락주세요.</option>
                            </select>
                            <br>
                            <h4 style="float:left; padding-top:0.7em; ">휴대폰</h4> 
                            <select name="ph" style="padding:1em;  margin-left:1em;  margin-bottm:2em;margin-right:2em;width:6em;float:left;">
                                <option value="010">010</option><option value="011">011</option><option value="016">016</option><option value="017">017</option>
                                <option value="018">018</option><option value="019">019</option><option value="070">070</option><option value="0130">0130</option>
                                <option value="0303">0303</option><option value="0502">0502</option><option value="0504">0504</option><option value="0505">0505</option>
                                <option value="0506">0506</option>
                            </select>
                            <input required type="text"name="ph1"  style="float:left;border: 1px solid lightgray; display:block; padding: 1em; width: 7em;margin-right:2em; margin-bottm:2em;">
                            <input required type="text"name="ph2"  style="border: 1px solid lightgray; display:block; padding: 1em; width: 7em;margin-right:2em; margin-bottm:2em;">
                            
                        </div>

                        <h3 style="margin-top:1em;margin-bottom:1em;">결제수단</h3>
                        <div style="width:80%; border:1px solid lightgray; padding:2em;">
                            <input style="margin-right:1em; margin-left:2em;"type="radio" name="pay" value="card" checked="checked">신용카드
                            <input style="margin-right:1em; margin-left:2em;"type="radio" name="pay" value="passbook">무통장
                            <input style="margin-right:1em;margin-left:2em;"type="radio" name="pay" value="ask">에스크
                            <input style="margin-right:1em;margin-left:2em;"type="radio" name="pay" value="npay">네이버페이
                        </div>

                        <h3 style="margin-top:1em;margin-bottom:1em;">최종결제정보</h3>
                        <div style="text-align:center;width:80%; border:1px solid #ddd; padding:2em;background-color:#f3f3ee; ">
                            <?php
                            if($price>50000){
                            ?>
                            <h2 style="margin-bottom:1em;">상품가 : <?php echo $price-$price*$sale/100;?> + 배송비 : 0 (5만원 이상 무료배송) </h2>
                            <h1 style="color:red;"><?php echo $reprice.'원';}else{?></h1>

                            <h2 style="margin-bottom:1em;">상품가 : <?php echo $price-$price*$sale/100;?> + 배송비 : 3000 (5만원 이상 무료배송) </h2>
                            <h1 style="color:red;"><?php echo ($reprice+3000)."원";}?></h1>
                        
                        </div>

                        <button type="submit" name="submit" style="border:0px;background-color: red; display:block; color: white; padding: 1em; margin: 0 auto; width: 20em; margin-top: 2em; margin-right:60em;">구매</button>
                    </form>
                </div>
            </div>
        
		</content>
	</body>
</html>