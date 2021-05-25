<?php 
 session_start();
 include "src.php";
 session_destroy();
 header('location:login?g=' . urlencode(base64_encode("$id_session")));
 exit();