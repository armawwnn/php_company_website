<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$whatsapp=$_POST['whatsapp'];
$telegram=$_POST['telegram'];
$instagram=$_POST['instagram'];
$facebook=$_POST['facebook'];
insertsosial($whatsapp,$telegram,$instagram,$facebook);
Webheader('../create_social.php');