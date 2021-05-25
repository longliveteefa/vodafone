<?php
include "../../../src.php";
 header('Content-Type: text/css');
 $base = basename($act_url,".php");
 ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

html{
    box-sizing: border-box;
    font-weight: 300;
    line-height: 24px;
    /* height: 600px; */
    overflow-x: hidden;
    scroll-behavior: smooth;
}
body{
    font-family: 'Montserrat', sans-serif;
    font-size: 13px;

}
.navbar{
    position: relative;
    background-color: <?php  echo $_bcolor; ?>;
    width: 100%;
    height: 100px;
}
.navbar .container-fluid h1{
    color: whitesmoke;
}
.logo_img{
    width: 200px;
    height: 50px;
}
.logo{
    margin-left: 20px;
    margin-top: 20px;
}
.free{
    position: absolute;
    right: 0;
    left: 0;
}
.section{
    position: absolute;
    background-color: black;
    /* background-color: whitesmoke; */
    width: 100%;
}

.form-control:focus {
    border-color: <?php echo $main_color;?>;
    box-shadow: 0 0 0 0.2rem;
}
.b{
    border-radius: 2px 5px;
    width: 100%;
    height: 2px;
    background-color: <?php echo $main_color; ?>;
    -webkit-border-radius: 2px 5px;
    -moz-border-radius: 2px 5px;
    -ms-border-radius: 2px 5px;
    -o-border-radius: 2px 5px;
}

::-moz-selection{
    background: <?php echo $main_color;?>;
    color: #fff
}
::-webkit-selection{
    background: <?php echo $main_color;?>;
    color: #fff
}
:-ms-selection{
    background: <?php echo $main_color;?>;
    color: #fff
}
::selection{
    background: <?php echo $main_color;?>;
    color: #fff
}


/* Slideshow */

.crossfade > figure {
    animation: imageAnimation 30s linear infinite 0s;
    backface-visibility: hidden;
    background-size: cover;
    background-position: center center;
    color: transparent;
    height: 100%;
    left: 0px;
    opacity: 0;
    position: absolute;
    top: 0px;
    width: 100%;
    z-index: 0;
  }


  .crossfade > figure:nth-child(1) { background-image: url('../images/slide/<?php echo $img_1 ?>?<?=rand(1,32000)?>'); }

.crossfade > figure:nth-child(2) {
  animation-delay: 6s;
  background-image: url('../images/slide/<?php echo $img_2 ?>?<?=rand(2,32000)?>');
}

.crossfade > figure:nth-child(3) {
  animation-delay: 12s;
  background-image: url('../images/slide/<?php echo $img_3 ?>?<?=rand(3,32000)?>');
}

.crossfade > figure:nth-child(4) {
  animation-delay: 18s;
  background-image: url('../images/slide/<?php echo $img_4 ?>?<?=rand(4,32000)?>');
}

.crossfade > figure:nth-child(5) {
  animation-delay: 24s;
  background-image: url('../images/slide/<?php echo $img_5 ?>??<?=rand(5,32000)?>');
}


@keyframes 
imageAnimation {  0% {
 animation-timing-function: ease-in;
 opacity: 0;
}
 8% {
 animation-timing-function: ease-out;
 opacity: 1;
}
 17% {
 opacity: 1
}
 25% {
 opacity: 0
}
 100% {
 opacity: 0
}
}


.bg8ad{
    width: 300px;
    height: 500px;
    background-color: rgba(247, 242, 242, 0.2);
    border-radius: 0 0 20px 60px;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
}
.bg8ad{
    color: white;
}

.form-text{
    color: white;
}

.bt8{
    font-size:13px;
    text-decoration: none;
    background: rgba(16,17,17,0.7);
    padding: 13px 0;
    width: 280px;
    margin-top: 10px;
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    color: #fff;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
}
.bt8:hover{

    color: #fff;
    background-color: <?php echo $main_color; ?>;
}
.rt8{
    display: none;
    color: #101111;
}
.titlescos{
    font-size:20px;
    color: <?php echo $main_color; ?>;
}
.card{
   border-radius: 0px;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   -ms-border-radius: 0px;
   -o-border-radius: 0px;
}
.teefa{
    position: absolute;
    top: 450px;
    left: 130px;
    width: 30px;
    height: 30px;
    background-image: url("../images/ms.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain
}
.btn-light{
    border:none;
    color: #fff;
    background: rgba(16,17,17,0.6);
    font-size:13px;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
}
.btn:focus {
    border-color: <?php echo $_bcolor;?>;
    box-shadow: 0 0 0 0.2rem rgba(0,0,0,.25);
}
.btn-light:focus {
    border-color: <?php echo $_bcolor;?>;
    box-shadow: 0 0 0 0.2rem rgba(0,0,0,.25);
}
.btn-light:hover{
    border:none;
    color: #fff;
    background-color: <?php echo $main_color; ?>;
}
.card{
    width: 300px;
}

.sr_logo{
    width: 120px;
    height: 120px;
    background-image: url("../images/<?php echo $src_what;?>");
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain
}
.country_name{
    color:#fff;
    margin-left:5px;
    font-size:10px;
    cursor: context-menu;
}
._logo{
    width: 200px;
    height: 50px;
    background-image: url("../images/<?php echo $src_logo; ?>?<?=rand(1,32000)?>");
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain
}
.ssat{
    color:<?php echo $main_color;?>;
}
.error_name{
    font-size: 70px;
    color : <?php echo $main_color;?>;
}
.sec{
    width:100%;
    height:100%;
    background-color: <?php echo $_bcolor;?>;
}
.error_message{
    color:  #fff;
    font-weight:500;
}
.ms{
    color: <?php echo $main_color;?>;
    font-weight:600;
}
.wm_{
    font-size: 12px;
    font-weight: 400;
    margin-left: 12px;
    text-transform: uppercase;
    color: #fff;
}
.xd{
    position: relative;
    right: 90;
    bottom: 20;

}
.nav-link{
    font-size:13px;
    text-decoration: none;
    background: rgba(16,17,17,0.7);
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    -ms-border-radius: 10px;
    -o-border-radius: 10px;
    color: #fff;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
}
.nav-link:hover{
    color: #fff;
    background-color: <?php echo $main_color; ?>;
}
.nav-link:focus{
    color: #fff;
    }
    .dropdown-item:focus{
        background-color: #fff  ;
    }
    .dropdown-item:hover{
        color: #fff;
        background-color: <?php echo $main_color; ?>;
    }
    .wm_:hover{
        color:<?php echo $main_color;?>;
    }
    .cr{
        background-color: <?php echo $_bcolor;?>;
        height: 100%;
        width: 100%;
    }
    .img_spo{
        width: 100px;
        height: 100px;
    }
    .item_set{
        width: 200px;
        height: 200px;
        border: 1px solid red;
    }
</style>

