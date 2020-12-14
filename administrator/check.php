<?php
include_once "config.php";
session_start();
$userName= $_POST ['username'];
$passWord= $_POST ['password'];
$secure=sha1($passWord);
$con=ConnectDataBase();
$query=selectAdmin();
$flag=true;
while ($item=mysqli_fetch_assoc($query)){
    if ($item['username']===$userName && $item['password']===$secure){
        $_SESSION['admin']=$userName;
        Webheader('admin/admin.php');
        $flag=false;
    }
}
if ($flag==true){
    $_SESSION['wrong']='نام کاربری یا کلمه عبور اشتباه است ...';
    Webheader('login.php');
}