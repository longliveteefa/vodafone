<?php
$_theme = "blue";
$act_url = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$_template = "templates";
$id_session = session_id();


$_url = "http://www.longliveteefa.online/";

function url(){
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $_SERVER['REQUEST_URI']
    );
  }
function src_template(){
    $src_emplate = "templates/";   
    echo $src_emplate;
}

function src_theme(){
    $theme = "blue/";   
    echo $theme;
}

function name(){
    $name = "Vodafone";
    echo $name;
}
//

$img_1 = "2.jpg";
$img_2 = "7.jpg";
$img_3 = "3.jpg";
$img_4 = "7.jpg";
$img_5 = "2.jpg";

//

$src_logo = "vodafone_logo.png";
$src_icon = "icon_voda.png";
$src_icon_2 = "icon_voda-2.png";
$src_what = "what_voda.png";
$_bcolor = "#101111";
$main_color = "#EE3023";
$sr_logo = "voda_icon_small.png";