<?php
include "db.php";

$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$adress=$_POST['adress'];
$email=$_POST['e-mail'];
$ph=$_POST['ph_num1'].$_POST['ph_num2'].$_POST['ph_num3'];

$sql  = "INSERT INTO user_info (id,pass,ph_number,name,email,adress) VALUES ('$id','$pw','$ph','$name','$email','$adress')";
$result = mysqli_query($conn, $sql);
if($result==true){
?>
<script>
    alert("회원가입이 완료되었습니다. 로그인 후 이용해 주세요");
    location.href='main.php';
</script>
<?php
}else{
?>
<script>
    alert("아이디와 비밀번호를 다시 확인해 주세요");
    location.href='join.html';
</script>   

<?php
}
?>
