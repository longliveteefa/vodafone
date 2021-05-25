<?php
ob_start();
session_start();
$title = "Log in";
include "src.php";
$base = basename($act_url,".php");
include "api.php";
include "templates/$_theme/files/header.php";

if(isset($_POST['vfusername']) && !isset($_SESSION['vfusername'])){


    $users = [

        "mustafa" => "123456",
        "admin" => "admin",
        "vfmustaa" => "123"
    ];
    if(isset($users[$_POST['vfusername']])){

        if($users[$_POST['vfusername']] == $_POST['vfpassword']){

            $_SESSION['vfusername'] = $_POST['vfusername'];

        }

    }
    

  if (!isset($_SESSION['vfusername'])) { $failed = true; }
}

if (isset($_SESSION['vfusername'])) {
  header('Location: home?session='. urlencode(base64_encode("$id_session"))); 
  exit();
}
    

include "templates/$_theme/files/$base/cont.php";
include "templates/$_theme/files/footer.php";
include "templates/$_theme/files/body.php";

ob_end_flush();
?>