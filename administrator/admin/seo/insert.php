<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$title=$_POST['title'];
$author=$_POST['author'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
$image=$_FILES['image'];
$con=ConnectDataBase();
$image_name=upoadfile($image,"seo");
insertSEO($title,$author,$keywords,$description,$image_name);
Webheader('../admin.php');