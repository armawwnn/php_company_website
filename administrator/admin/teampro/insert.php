<?php
include_once "../../config.php";
AdminIsSet("../../login.php");
$title=$_POST['title_teampro'];
$description=$_POST['description'];
$image=$_FILES['image'];
$image_name=upoadfile($image,"teampro");
insertatteampro($title,$description,$image_name);
Webheader("../create_teampro.php");
