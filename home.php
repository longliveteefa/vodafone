<?php
ob_start();
session_start();
$title = "Vodafone";
include "src.php";
$base = basename($act_url,".php");
include "api.php";
$vfusername = $_SESSION['vfusername'];

$posts =  [
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetretasasssdfsetsrtsrterdtetetetetetetetretasasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetretasasssdfsetsrtsrterdtetetetetetetetretasasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'asasssdfsetsrtsrterdtetetetetetetetret'],
    ['asasa'=>'tell  a'],
    ['asasa'=>'tell  a'],
    ['asasa'=>'tell  a'],
    ['asasa'=>'tell  a']
];


if(empty($_SESSION['vfusername'])){

    header("Location:login");

}else{
    include "templates/$_theme/files/header.php";
    include "templates/$_theme/files/$base/cont.php";
    include "templates/$_theme/files/footer.php";
    include "templates/$_theme/files/body.php";
}
ob_end_flush();#$