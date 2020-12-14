<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$id=intval($_POST['id']);
$item=selecByidseo($id);
$image=$item['image'];
unlink('../image/seo/'.$image);
deletesoe($id);
Webheader('../show_seo.php');