<?php
session_start();
if(isset($_SESSION['manager'])){
    echo("<script>location.href='manager_user_care.php';</script>"); 
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/earlyaccess/notosanskr.css">
		<link rel='icon' type='images/png'href='images/titleLogo.png'>
		<title>TVING MALL - 관리자 로그인</title>
		<meta charset="utf-8">

		<style>
			
			*{
				margin:0; padding:0; box-sizing: border-box; 
				list-style-type: none;
				background-color: black;
				font-family: 'Noto Sans KR',sans-serif;
			}
			body{
				width: 800px;
				height: 100%;
                margin:0 auto;
			}
			form span{
				display: block;
				padding-top: 2em;
				color: white;
				text-align: center;
				font-size: 1.3em;
				margin-bottom: 1em;
			}
			form{
				margin: 0 auto;
				padding: 3em;
				width: 40em;
			}
			a{	text-decoration: none; color: black;}
		</style>

	</head>
	<body>
		<form method="post" action="login.php" style="margin-top:10em;">
			<span>관리자 - 로그인</span>
			<input type="text" name="id" placeholder="아이디" style="border: 1px solid gray; display:block;color: white; padding: 1.5em; margin: 0 auto; width: 30em;">
			<input type="password" name="password" placeholder="비밀번호" style="border: 1px solid gray; display:block;color: white; padding: 1.5em; margin: 0 auto; width: 30em; margin-top: 2em;">
			<button type="submit" name="loginBtn" style="background-color: gray; display:block;color: lightgray; padding: 1.5em; margin: 0 auto; width: 30em; margin-top: 2em;">로그인</button>

			<a href="../user/main.php" style="color: gray; margin-top: 1em; display: block;margin-right: 4.5em; float: right;">TVING MALL 가기</a>
		</form>
		
	</body>
</html>