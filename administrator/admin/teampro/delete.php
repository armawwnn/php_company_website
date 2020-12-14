<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$id=intval($_POST['id']);
$item=selectbyidteampro($id);
$image=$item['image'];
unlink('../image/teampro/'.$image);
deleteteampro($id);
Webheader('../show_teampro.php');