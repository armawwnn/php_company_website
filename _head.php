<!doctype html>
<?php
    include_once "administrator/config.php";
    $item=lastseo();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $item['title']; ?></title>
    <!--    meta website-->
    <meta name="description" content="<?php echo $item['description']; ?>"/>
    <meta name="keywords" content="<?php echo $item['keywords']; ?>"/>
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="<?php echo $item['author']; ?>"/>
    <!--    telegram-->
    <meta property="og:title" content="<?php echo $item['title']; ?>"/>
    <meta property="og:site_name" content="<?php echo $item['title']; ?>"/>
    <meta property="og:description" content="<?php echo $item['description']; ?>"/>
    <meta property="og:keywords" content="<?php echo $item['keywords']; ?>"/>
    <meta property="og:image" content="<?php echo $item['image']; ?>"/>
    <!--    twitter-->
    <meta property="twitter:title" content="<?php echo $item['title']; ?>"/>
    <meta property="twitter:site" content="<?php echo $item['title'] ;?>"/>
    <meta property="twitter:description" content="<?php echo $item['description']; ?>"/>
    <meta property="twitter:creator" content="<?php echo $item['keywords']; ?>"/>
    <meta property="twitter:image" content="<?php echo $item['image']; ?>"/>
    <!--    css bootstrap-->
    <link rel="stylesheet" href="<?php echo URL?>dist/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo URL?>dist/bootstrap/css/bootstrap.min.css">
    <!--    icon website-->
    <link rel="icon" href="<?php echo URL ?>dist/images/icon/favicon.ico" type="image/x-icon">
    <!--    template css-->
    <link rel="stylesheet" href="<?php echo URL ?>dist/bootstrap/css/css_front/template.css">
    <!--    link lightbox-->
    <link rel="stylesheet" href="<?php echo URL ?>dist/lightbox/css/lightbox.min.css">
    <!--    link font awesome-->
    <link rel="stylesheet" href="<?php echo URL ?>dist/Font_Awesome_Pro_v5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
<!--    toastar-->
    <link rel="stylesheet" href="<?php URL ?>dist/toastar/toastr.min.css">
</head>
<body>
<!--head part-->
