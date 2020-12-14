<?php
include_once "../../config.php";
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$comment=$_POST['comment'];
try{
    insertcontact($fullname,$email,$comment);
    echo 1;
}catch (Exception $e){
    echo 0;
}