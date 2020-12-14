<?php
include_once "../../config.php";
AdminIsSet("../../login.php");
$title_parallax=$_POST['title_parallax'];
$description=$_POST['description'];
$image=$_FILES['image'];
$image_name=upoadfile($image,"parallax");
inseratparallax($title_parallax,$description,$image_name);
Webheader("../create_parallax.php");
