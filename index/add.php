<?php
//接受值并验空
$name=$_POST['name'];
if(empty($name)){
    echo "用户名称不能为空";
}

$tel=$_POST['tel'];
if(empty($tel)){
    echo "手机号不能为空";
}

$email=$_POST['email'];
if(empty($email)){
    echo "邮箱不能为空";
}

$pass=$_POST['pass'];
if(empty($pass)){
    echo "密码不能为空";
}

$pass1=$_POST['pass1'];
if(empty($pass1)){
    echo "确认密码不能为空";
}else if($pass!=$pass1){
    die ('确认密码与密码保持一致');
}

//连接mysql数据库-----mysqli
$link=mysqli_connect('localhost','root','root','blog');

//密码加密
$pass=md5($pass);

//sql语句
$sql="insert into users(`name`,`tel`,`email`,`pass`) values('$name','$tel','$email','$pass')";
//echo $sql;die;

//入库
$res=mysqli_query($link,$sql);

if($res){
    echo "注册成功";
    header("refresh:2,url='login.php'");
}else{
    echo "注册失败";
    header("refresh:2,url='register.php'");
}

?>