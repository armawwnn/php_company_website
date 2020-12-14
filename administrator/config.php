<?php
/**********************const val*******************************/
define("URL","http://localhost/SoftArmani/");
define("Bootstrap_css","http://localhost/SoftArmani/dist/admin/bootstrap/css/bootstrap.min.css");
define("jQuery","http://localhost/SoftArmani/dist/admin/bootstrap/js/jquery-3.5.1.slim.min.js");
define("popper","http://localhost/SoftArmani/dist/admin/bootstrap/js/popper.min.js");
define("BootstrapJS","http://localhost/SoftArmani/dist/admin/bootstrap/js/bootstrap.min.js");
define("AdminCss","http://localhost/SoftArmani/dist/admin/bootstrap/css/admin.css");
define("Icon","http://localhost/SoftArmani/dist/images/icon/favicon.ico");
/********************** End const val*******************************/
/*********************************************connect to database**************************/
function ConnectDataBase(){
   $con=mysqli_connect("localhost","root","","softarmani");
   return $con;
}
/*********************************************End connect to database**************************/
/*****************************************function header ***********************************/
function Webheader($url){
    header('location:'.$url);
}
/***************************************** End function header ***********************************/
/************************************** function admin is set ***********************/
function AdminIsSet($url){
    session_start();
    if (!isset($_SESSION['admin'])){
        Webheader($url);
    }
}
/************************************** End function admin is set *****************/
/****************************************** Function login *******************/
function selectAdmin(){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from login");
    return $query;
}
function insertAdmin($username,$password,$access){
    $con=ConnectDataBase();
    mysqli_query($con,"insert into login(username,password,access)values('$username','$password',$access)");
}
/***************************************** End admin **************************/
function upoadfile($image,$folder){
    $image_name=time().$image['name'];
    $directory="../image/".$folder."/".$image_name;
    move_uploaded_file($image['tmp_name'],$directory);
    return $image_name;
}
/******************************** CRUD SEO *********************************/
function insertSEO($title,$author,$keywords,$description,$image){
    $con=ConnectDataBase();
    mysqli_query($con,"insert into seo(title,author,keywords,description,image)values
('$title','$author','$keywords','$description','$image')");

}
function selectSeo(){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from seo");
    return $query;
}
function selecByidseo($id){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from seo where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function deletesoe($id){
$con=ConnectDataBase();
mysqli_query($con,"delete from seo where id =$id");
}
function updateseo($title,$author,$keywords,$description,$image,$id){
$con=ConnectDataBase();
mysqli_query($con,"update seo set title='$title',author='$author',keywords='$keywords',description='$description'
,image='$image' where id =$id");
}
function lastseo (){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from seo order by id desc limit 1 offset 0");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
/********************************************** End CRUD SEO **********/
/******************************************************* upload image  condition*************/
function uploadconditionimage($image,$item,$folder){
    if($image['name']==null){
        return $image_name=$item['image'];
    }else {
        $image_delete=$item['image'];
        unlink('../image/'.$folder.'/'.$image_delete);
        return $image_name=upoadfile($image,$folder);
    }
}
/******************************************************* End upload image  condition *************/
/******************************************************* CRUD parallax*************/
function inseratparallax($title_parallax,$description,$image){
    $con=ConnectDataBase();
    $query=mysqli_query($con, "insert into parallax(title_parallax,description,image)values('$title_parallax','$description','$image')");
}
function selectparallax(){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from parallax");
    return $query;
}
function selectparalaxid($id){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from parallax where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function deleteparallax($id){
    $con=ConnectDataBase();
    mysqli_query($con,"delete from parallax where id=$id");
}
function updateparallax($title_parallax,$description,$image,$id){
    $con=ConnectDataBase();
    mysqli_query($con,"update parallax set title_parallax='$title_parallax',description='$description',image='$image' where id =$id");
}
function lastparallax (){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from parallax order by id desc limit 1 offset 0");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
/******************************************************* END CRUD parallax*************/
/*******************************************************  CRUD teampro *************/
function insertatteampro($title,$description,$image_name){
    $con=ConnectDataBase();
    mysqli_query($con,"insert into teampro(image,title,description)values 
('$image_name','$title','$description')");
}
function selectteampro(){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from teampro");
    return $query;
}
function selectbyidteampro($id){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from teampro where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function deleteteampro($id){
    $con=ConnectDataBase();
    mysqli_query($con,"delete from teampro where id=$id");
}
function updateteampro($title,$description,$image,$id){
    $con=ConnectDataBase();
    mysqli_query($con,"update teampro set image='$image',title='$$title',description='$description' where id =$id");
}
/******************************************************* END teampro *************/
/******************************************************* CRUD  gallery *************/
function insertatgallery($caption,$image){
    $con=ConnectDataBase();
    mysqli_query($con,"insert into gallery(caption,image)values('$caption','$image')");
}
function selectgallery(){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from gallery ");
    return $query;
}
function selectgallerybyid($id){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from gallery where id =$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function deletegallery($id){
    $con=ConnectDataBase();
    mysqli_query($con,"delete from gallery where id=$id");
}
function updategallery($caption,$image,$id){
    $con=ConnectDataBase();
    mysqli_query($con,"update gallery set caption='$caption',image='$image' where id=$id");
}
/******************************************************* End CRUD  gallery *************/
/******************************************************* contact *************/
function insertcontact($fullname,$email,$comment){
    $con=ConnectDataBase();
    mysqli_query($con,"insert into tbl_contact(fullname,email,comment)values('$fullname','$email','$comment')");
}
function selectcontact() {
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from tbl_contact ");
    return $query;
}
function deleteContact($id){
    $con=ConnectDataBase();
    mysqli_query($con,"delete from tbl_contact where id=$id");
}
/******************************************************* END contact *************/
/******************************************************* sosial *************/
function insertsosial($whatsapp,$telegram,$instagram,$facebook){
    $con=ConnectDataBase();
    mysqli_query($con,"insert into tbl_social(whatsapp,telegram,instagram,facebook)values('$whatsapp','$telegram','$instagram','$facebook')");
}
function selectsocial(){
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select *from tbl_social");
    return $query;
}
function deleteSocial($id)
{
    $con = ConnectDataBase();
    mysqli_query($con, "delete from tbl_social where id=$id");
}
function latestSocial () {
    $con=ConnectDataBase();
    $query=mysqli_query($con,"select * from tbl_social order by id desc limit 1 offset 0");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
/*******************************************************End sosial *************/