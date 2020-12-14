<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$caption=$_POST['caption'];
$id=$_POST['id'];
$image=$_FILES['image'];
$item=selectgallerybyid($id);
$image_name=uploadconditionimage($image,$item,'gallery');
updategallery($caption,$image_name,$id);
Webheader('../show_gallery.php');
