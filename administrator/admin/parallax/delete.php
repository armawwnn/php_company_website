<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$id=intval($_POST['id']);
$item=selectparalaxid($id);
$image=$item['image'];
unlink('../image/parallax/'.$image);
deleteparallax($id);
Webheader('../show_parallax.php');