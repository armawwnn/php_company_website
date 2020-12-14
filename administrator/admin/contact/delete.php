<?php
include_once "../../config.php";
AdminIsSet('../../login.php');
$id=intval($_POST['id']);
deleteContact($id);
Webheader('../show_contact.php');
