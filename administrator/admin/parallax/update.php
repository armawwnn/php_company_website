<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$title_parallax=$_POST['title_parallax'];
$description=$_POST['description'];
$id=$_POST['id'];
$image=$_FILES['image'];
$item=selectparalaxid($id);
$image_name=uploadconditionimage($image,$item,'parallax');
updateparallax($title_parallax,$description,$image_name,$id);
Webheader('../show_parallax.php');