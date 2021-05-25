<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    
    if($title == "Vodafone"){

        echo "<title>$title</title>";
    }elseif($title == "Log in"){
        echo "<title>$title | "; echo name(); echo country_name(); echo"</title>";
    }
    ?>
    <link rel="stylesheet" href="<?php src_template(); ?><?php src_theme(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php src_template(); ?>plug/sweetalert2/dist/sweetalert2">
    <link rel="stylesheet" href="<?php src_template(); ?><?php src_theme(); ?>css/style">
    <link rel="stylesheet" href="<?php src_template(); ?>plug/linearicons/WebFont/style.css">
    <?php 
    
    if($title == "Log in"){

        echo "<link rel=icon href="; echo src_template(); echo src_theme(); echo "images/$src_icon_2"; echo " "; echo "type=image/png>";
    }elseif($title == "Vodafone"){
        echo "<link rel=icon href="; echo src_template(); echo src_theme(); echo "images/$src_icon"; echo " "; echo "type=image/png>";
    }
    
    ?>
</head>
<body>

    <style>
 <?php ?>       
.lyr2{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 12px;
    <?php 
    if($base == "home"){
        echo "background-color: white";
    }else{
        echo "background-color: rgba(238, 48, 35, 0.6);";
    }
    ?>

}
.lyr{
    <?php 
        if($base == "home"){
            echo "opacity: 0.9;";
        }else{
            echo "opacity: 0.5;";
        }
        
        ?>
}
    <?php 
        if($title=="Log in"){
            echo "section{height: 100%;}";
        }elseif($title=="Vodafone"){
            echo"";
        }else{
            echo "section{height: 100%;};";
        }

        ?>
    </style>
<!--Bodyhere-->
<header>
    <nav class="navbar">
        <?php
            if($base == "home"){
                echo '<div class="container-fluid">';
            }else{
                echo '<div class="col-6 col-md-auto container-fluid">';
            }

        ?>
            <div class="_logo"></div>
            <div class="container d-flex justify-content-center free">
            </div>
            <h6 class="country_name"><?php country_name();?></h6>
           <div class="dev"></div>
        </div>
        <?php 
        if($base == "home"){
            echo  '<div class="wle_msg">
            <h5 class="wm_">Welcome , '; echo "$vfusername</h5></div>";
            echo '<li class="nav-item dropdown xd">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu <span class="lnr lnr-menu"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item"'; echo 'href=';echo"logout";echo '>Logout</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Add Post</a></li>
            </ul>
          </li>';
        }else{
            echo "";
        }
        
        ?>
    </nav>
</header>