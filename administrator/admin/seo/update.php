<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$title=$_POST['title'];
$author=$_POST['author'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
$id=$_POST['id'];
$image=$_FILES['image'];
$item=selecByidseo($id);
$image_name=uploadconditionimage($image,$item,'seo');
updateseo($title,$author,$keywords,$description,$image_name,$id);
Webheader('../show_seo.php');