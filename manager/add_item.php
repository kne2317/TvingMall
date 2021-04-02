<?php
$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$category=$_POST['category'];
$program=$_POST['program'];



$uploaddir = '../user/images/';


$uploadfile = $uploaddir.$_FILES['img_ad']['name'];
$f_name = $_FILES['img_ad']['name'];
$f_type = $_FILES['img_ad']['type'];
$f_size = $_FILES['img_ad']['size'];
$tmp_name= $_FILES['img_ad']['tmp_name'];
$img_ad = $uploadfile;

if(move_uploaded_file($_FILES['img_ad']['tmp_name'], $uploadfile)){
    $img_ad = $uploadfile;
    move_uploaded_file($tmp_name,$uploaddir)
}

$uploadfile = $uploaddir.$_FILES['item_content']['name'];
$f_name = $_FILES['item_content']['name'];
$f_type = $_FILES['item_content']['type'];
$f_size = $_FILES['item_content']['size'];
$tmp_name= $_FILES['item_content']['tmp_name'];
$item_content = $uploadfile;

if(move_uploaded_file($_FILES['item_content']['tmp_name'], $uploadfile)){
    $item_content = $uploadfile;
    move_uploaded_file($tmp_name,$uploaddir)
}

include "db.php";

$sql = "insert into item(name, price, sale, category, program, img_ad, item_content) values('$name','$price','$sale','$category','$program','$img_ad','$item_content')";
mysqli_query($conn, $sql);

echo("<script>location.href='manager_item.php';</script>"); 
?>
