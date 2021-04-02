<?php
session_start();
if(!isset($_SESSION['manager'])){
    echo("<script>location.href='manager.php';</script>"); 
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/earlyaccess/notosanskr.css">
		<link rel='icon' type='images/png'href='images/titleLogo.png'>
		<title>TVING MALL - 관리자</title>
		<link rel="stylesheet" href="manager_style.css?after">
		<style>
			section{
				padding:5em;
			}
			td{
				padding:1em;
				padding-right: 3em;
				padding-left: 3em;
				text-align: center;
				
			}
		</style>

	</head>
	<body>
		<nav>
			<ul>
				<a href="manager_user_care.php"><li>회원관리</li></a>
				<a href="manager_item_add.php"><li style="font-size:18pt; color:white;">상품등록</li></a>
				<a href="manager_item.php"><li>상품수정/삭제</li></a>
				<a href="manager_item.php"><li>재고관리</li></a>
                <a href="manager_sell.php"><li>판매목록</li></a>
                <a href="logout.php"><li>로그아웃</li></a>
			</ul>
		</nav>
		<section>
            <form action="add_item.php" method="post" enctype="multipart/form-data">
                <input required type="text" name="name" placeholder="상품명" style="padding:1em; margin:1em; width:40em;">

                <br>

                <span style="padding-left:1em; margin:1em; margin-left:0em;">상품 이미지 선택</span>
                <span style="padding-left:1em; margin:1em; margin-left:10em;">상품 설명</span>
                <br>
                <br>
                <input type="file" name="img_ad" style=" margin:1em; ">

                <input type="file" name="item_content" style="margin:1em; margin-left:3em;">
                <br>

                <input required type="text" name="price" placeholder="상품 가격 ( , 없이 입력 )"  style="padding:1em;  margin:1em;width:40em;">원
                <br>

                <input required type="text" name="sale" placeholder="상품 할인율 ( 할인상품이 아닐 경우 0입력 )" style="padding:1em;  margin:1em;width:40em;">%

                <br>

                <input type="text" name="program" placeholder="프로그램" style="padding:1em; margin:1em;width:40em;">
                
                <br>

                <select name="category" style="padding:1em;  margin:1em;width:40em;">
                    <optgroup label="굿즈">
                        <option value="goods">-----굿즈-----</option>
                        <option value="movie_goods">방송영화애니굿즈</option>
                        <option value="art_goods">아티스트굿즈</option>
                        <option value="char_goods">캐릭터/웹툰/크리에이터 굿즈</option>
                        <option value="cd_goods">CD/DVD/LP</option>
                        <option value="book_goods">대본집/스토리북</option>
                        <option value="music_goods">악보집</option>
                    </optgroup>

                    <optgroup label="패션" >
                        <option value="fashion">-----패션-----</option>
                        <option value="clothes">옷</option>
                        <option value="bag">잡화</option>
                        <option value="jewelry">악세사리</option>
                    </optgroup>

                    <optgroup label="뷰티" >
                        <option value="beauty">-----뷰티-----</option>
                        <option value="care">스킨/케어</option>
                        <option value="makeup">메이크업</option>
                        <option value="hair">미용소품</option>
                        <option value="body">바디/헤어케어</option>
                        <option value="perfume">향수</option>
                        <option value="man">남성뷰티</option>

                    </optgroup>
                    <optgroup label="라이프" >
                        <option value="life">-----라이프-----</option>
                        <option value="book">도서</option>
                        <option value="living">리빙</option>
                        <option value="health">생활/건강</option>
                        <option value="food">푸드</option>
                        <option value="design">디자인 문구</option>
                        <option value="ticket">티켓/이용권</option>
                        <option value="sports">레저/스포츠</option>
                    </optgroup>
                    <optgroup label="키즈" >
                        <option value="kids">-----키즈-----</option>
                        <option value="kids_book">학습완구/교구/책</option>
                        <option value="kids_boardgame">보드게임</option>
                        <option value="kids_interior">침구/인테리어</option>
                        <option value="kids_doll">인형/장난감</option>
                        <option value="kids_cloth">키즈의류</option>
                        <option value="kids_etc">키즈잡화</option>
                        <option value="kids_baby">이유식용품</option>
                        <option value="kids_water">물놀이용품</option>
                        <option value="kids_safe">위생안전용품</option>
                        <option value="sinby">신비아파트</option>
                    </optgroup>
                    <optgroup label="가전" >
                        <option value="home">-----가전-----</option>
                        <option value="bighome">대형가전</option>
                        <option value="bimproject">빔프로젝터</option>
                        <option value="seasonhome">계절가전</option>
                        <option value="kitchenhome">주방가전</option>
                        <option value="lifehome">생활/소형가전</option>
                    </optgroup>
                    <optgroup label="디지털" >
                        <option value="digital">-----디지털-----</option>
                        <option value="sound">음향기기</option>
                        <option value="camera">카메라</option>
                        <option value="phone">휴대폰액세서리</option>
                        <option value="pc">노트북/PC/태블릿</option>
                        <option value="pc_etc">PC/노트북주변기기</option>
                        <option value="car">자동차용품</option>
                    </optgroup>
                </select>
                <br>
                <button type="submit" name="joinBtn" style="padding:1em; width:40em; margin:1em;">등록</button>

            </form>
		</section>
	</body>
</html>
