<?php
session_start();
if(!isset($_SESSION['manager'])){
    echo("<script>location.href='manager.php';</script>"); 
}
include "db.php";

$sql = "select * from user_info";

$result = mysqli_query($conn,$sql);
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
				padding:2em;
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
				<a href="manager_item_add.php"><li>상품등록</li></a>
				<a href="manager_item.php"><li>상품수정/삭제</li></a>
				<a href="manager_item.php"><li>재고관리</li></a>
				<a href="manager_sell.php"><li style="font-size:18pt; color:white;">판매목록</li></a>
				<a href="logout.php"><li>로그아웃</li></a>
			</ul>
		</nav>
		<section>
		</section>
	</body>
</html>
