<?php
session_start();          
header('Content-Type:text/html;charset=utf-8');//设置页面的内容结构  声明页面编码
// require('config.php');
//定义弹窗方法
// function alert($str,$url){
//     echo '<script>alert("'.$str.'");window.locatoin.href="'.$url.'";</script>';
// }
//接收账号密码
$username=$_POST['username'];  //trim()函数的作用，去除两边的空格或预定义符号
$password=$_POST['password'];
// if(strlen($username)<5){
//     echo"<script>alert('用户名不能少于5个字!');window.location.href='loginAndregister.php'</script>";
//     // alert('用户名不能少于5个字!', 'loginAndregister.php');
//     exit();
// }else{
// //sql
// $sql="select * from admin where username='".$username."' && password='".$password."'";
// //执行sql
// $result = mysqli_query($conn,$sql);
// //取出结果集$result的记录数
// $num=mysqli_num_rows($result);
// if($num>0){
//     $_SESSION['username']=$username;
//     $_SESSION['ischeck']='yes';
//      echo"<script>alert('登录成功!');window.location.href='index.html'</script>";
//     // alert('登陆成功!', 'index.php');
// }else{
//      echo"<script>alert('登录失败!');</script>";
//     // alert('用户名或密码错误!', 'loginAndregister.php');
// }
// mysqli_close($conn);

// }
if($username=="admin"&& $password==123123){
    echo"<script>alert('登录成功!');window.location.href='index.html'</script>";
}else{
    echo"<script>alert('登录失败!');</script>";
}


?> 


