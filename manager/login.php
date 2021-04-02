<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['password'];
date_default_timezone_set('Asia/Seoul');

$day= date("Ymd");
$time=date("Hi",time());

if($id==$day && $pw==$time){
    $_SESSION["manager"]="접속중";
    echo("<script>location.href='manager_user_care.php';</script>"); 
}else {
?>              
<script>
    alert("아이디 혹은 비밀번호가 잘못되었습니다.");
    history.back();
</script>
<?php
        
}
?>