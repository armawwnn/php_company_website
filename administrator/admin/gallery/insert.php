<?php
include_once "../../config.php";
AdminIsSet("../../login.php");
$caption=$_POST['caption'];
$image=$_FILES['image'];
$image_name=upoadfile($image,"gallery");
insertatgallery($caption,$image_name);
Webheader("../create_gallery.php");
