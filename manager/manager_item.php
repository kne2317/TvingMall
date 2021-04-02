<?php
session_start();
if(!isset($_SESSION['manager'])){
    echo("<script>location.href='manager.php';</script>"); 
}
include "db.php";

$sql = "select * from item";

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
				margin-left:40em;
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
				padding:2em;
			}
			td{
				padding:1.5em;
				padding-left:2em;
				padding-right:2em;
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
				<a href="manager_item.php"><li style="font-size:18pt; color:white;">재고관리</li></a>
				<a href="manager_sell.php"><li>판매목록</li></a>
				<a href="logout.php"><li>로그아웃</li></a>
			</ul>
		</nav>
		<section>
			<table> 
				<tr> 
					<th>상품번호</th> 
                    <th>상품사진</th>
					<th>상품명</th> 
					<th>가격</th> 
					<th>할인율</th>
					<th>category</th>
                    <th>프로그램</th>
					<th>수정/삭제</th>

				</tr>
				<?php
					if(isset($_GET['page'])){
						$page = $_GET['page'];
					}else{
						$page = 1;
					}
					$sql = mysqli_query($conn,"select * from item");
					$row_num = mysqli_num_rows($sql); 
					$list = 5; 
					$block_ct = 5; 

					$block_num = ceil($page/$block_ct); 
					$block_start = (($block_num - 1) * $block_ct) + 1; 
					$block_end = $block_start + $block_ct - 1;

					$total_page = ceil($row_num / $list); 
					if($block_end > $total_page) $block_end = $total_page;
					$total_block = ceil($total_page/$block_ct); 
					$start_num = ($page-1) * $list; 

					$sql2 = mysqli_query($conn,"select * from item order by id desc limit $start_num, $list");  
					while($row = mysqli_fetch_array($sql2)){
						$title=$row["name"]; 
						if(strlen($title)>30)
						{ 
						$title=str_replace($row["name"],mb_substr($row["name"],0,30,"utf-8")."...",$row["name"]);
						}
			
						?>
						<tr>
							<td><?php echo $row['id'];?></td>
							<td><?php echo "<img src='".$row['img_ad']."' width='80px'>";?></td>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['price'];?></td>
							<td><?php echo $row['sale'];?></td>
							<td><?php echo $row['category'];?></td>
							<td><?php echo $row['program'];?></td>
							<td><a href="manager_item_modify.php?id=<?php echo $row['id'];?>">수정/삭제</a></td>
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