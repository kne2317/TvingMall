<?php
include "db.php";

$id=$_GET['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$sale=$_POST['sale'];
$category=$_POST['category'];
$program=$_POST['program'];

if(isset($_FILES['img_ad']['tmp_name'])){
    $uploaddir = '../user/images/';
    $uploadfile = $uploaddir.$_FILES['img_ad']['name'];
    $img_ad = $uploadfile;

    if(move_uploaded_file($_FILES['img_ad']['tmp_name'], $uploadfile)){
        $img_ad = $uploadfile;
        $sql = "update item set img_ad='$img_ad' where id=$id";
        mysqli_query($conn, $sql);
    }
}

if(isset($_FILES['item_content']['name'])){
   
    $uploaddir = '../user/images/';
    $uploadfile = $uploaddir.$_FILES['item_content']['name'];
    $item_content = $uploadfile;

    if(move_uploaded_file($_FILES['item_content']['tmp_name'], $uploadfile)){
        $item_content = $uploadfile;
        $sql = "update item set item_content='$item_content' where id=$id";
        mysqli_query($conn, $sql);
    }
}

if(isset($name)){
    $sql = "update item set name = '$name' where id=$id";
    mysqli_query($conn, $sql);
}
    
if(isset($price)){
    $sql = "update item set price='$price' where id=$id";
    mysqli_query($conn, $sql);
}
if(isset($sale)){
    $sql = "update item set sale='$sale' where id=$id";
    mysqli_query($conn, $sql);
}
if(isset($category)){
    $sql = "update item set category='$category' where id=$id";
    mysqli_query($conn, $sql);
}

if(isset($program)){
    $sql = "update item set program='$program' where id=$id";
    mysqli_query($conn, $sql);
}


echo("<script>location.href='manager_item.php';</script>"); 
?>
