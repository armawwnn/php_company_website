<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$title_teampro=$_POST['title_teampro'];
$description=$_POST['description'];
$id=$_POST['id'];
$image=$_FILES['image'];
$item=selectbyidteampro($id);
$image_name=uploadconditionimage($image,$item,'teampro');
updateteampro($title_teampro,$description,$image_name,$id);
Webheader('../show_teampro.php');