<?php
$id=$_GET['id'];

include "db.php";
$sql = "delete from item where id=$id";
mysqli_query($conn, $sql);

echo("<script>location.href='manager_item.php';</script>"); 
?>
