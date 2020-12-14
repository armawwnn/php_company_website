<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$id=intval($_POST['id']);
$item=selectgallerybyid($id);
$image=$item['image'];
unlink('../image/gallery/'.$image);
deletegallery($id);
Webheader('../show_gallery.php');