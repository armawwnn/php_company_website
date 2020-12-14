<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$id=intval($_POST['id']);
deleteSocial($id);
Webheader('../show_social.php ');