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
			#page_num {
				margin-left:30em;
				margin-top:2em;
				font-size: 14px;
				color: gray;
			}
			#page_num ul li {
				float: left;
				margin-left: 3em; 
				text-align: center;
			}
			.fo_re {
				font-weight: bold;
				color:black;
			}
			section{
				padding:3em;
			}
			td{
				padding:1.5em;
				padding-right: 3em;
				padding-left: 3em;
				text-align: center;
				
			}
		</style>

	</head>
	<body>
		<nav>
			<ul>
				<a href="manager_user_care.php"><li style="font-size:18pt; color:white;">회원관리</li></a>
				<a href="manager_item_add.php"><li>상품등록</li></a>
				<a href="manager_item.php"><li>상품수정/삭제</li></a>
				<a href="manager_item.php"><li>재고관리</li></a>
				<a href="manager_sell.php"><li>판매목록</li></a>
				<a href="logout.php"><li>로그아웃</li></a>
			</ul>
		</nav>
		<section>
			<table> 
				<tr> 
					<th>이름</th> 
					<th>아이디</th> 
					<th>주소</th> 
					<th>이메일</th>
					<th>전화번호</th>
				</tr>
			<?php
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}else{
				$page = 1;
			}
			$sql = mysqli_query($conn,"select * from user_info");
			$row_num = mysqli_num_rows($sql); 
			$list = 10; 
			$block_ct = 10; 

			$block_num = ceil($page/$block_ct); 
			$block_start = (($block_num - 1) * $block_ct) + 1; 
			$block_end = $block_start + $block_ct - 1;

			$total_page = ceil($row_num / $list); 
			if($block_end > $total_page) $block_end = $total_page;
			$total_block = ceil($total_page/$block_ct); 
			$start_num = ($page-1) * $list; 

			$sql2 = mysqli_query($conn,"select * from user_info order by name limit $start_num, $list");  
			while($row = mysqli_fetch_array($sql2)){
	
			?>
			<tr>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['adress'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['ph_number'];?></td>
			</tr>
			<?php
			}
			?>
			</table>
			<div id="page_num">
					<ul>
						<?php
						if($page <= 1)
						{ 
							echo "<li class='fo_re'>처음</li>"; 
						}else{
							echo "<li><a href='?page=1'>처음</a></li>"; 
						}
						if($page <= 1)
						{ 
							
						}else{
						$pre = $page-1; 
							echo "<li><a href='?page=$pre'>이전</a></li>"; 
						}
						for($i=$block_start; $i<=$block_end; $i++){ 
							if($page == $i){ 
							echo "<li class='fo_re'>[$i]</li>"; 
							}else{
							echo "<li><a href='?page=$i'>[$i]</a></li>";
							}
						}
						if($block_num >= $total_block){ 
						}else{
							$next = $page + 1; 
							echo "<li><a href='?page=$next'>다음</a></li>"; 
						}
						if($page >= $total_page){ 
							echo "<li class='fo_re'>마지막</li>";
						}else{
							echo "<li><a href='?page=$total_page'>마지막</a></li>"; 
						}
						?>
					</ul>
				</div>
			</div>
			
		</section>
	</body>
</html>
