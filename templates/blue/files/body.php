<script src="<?php src_template(); ?><?php src_theme(); ?>js/jquery-3.6.0.min.js"></script>
<script src="<?php src_template(); ?><?php src_theme(); ?>js/bootstrap.bundle.js"></script>
<?php 

  if($title == "Vodafone"){
    echo "";
  }elseif($title == "Log in"){

    echo "<script src=";echo src_template();echo "plug/sweetalert2/dist/sweetalert2.all.js></script>";

  }

?>
<?php 
  if($title == "Vodafone"){
    echo "";
  }elseif($title == "Log in"){

  ?>
<script>
document.querySelector(".first").addEventListener("click", function() {
  Swal.fire({
    title: "<span class='titlescos'> How do I find the default login password?</span>",
    icon: 'error',
    iconHtml: '<div class="sr_logo"></div>',
    text: "You can find the default password from the device label or Quick Start.",
    showCancelButton: false,
    confirmButtonText: "Ok",
    confirmButtonColor: "<?php echo $main_color;?>",
    cancelButtonColor: "#ff0099"
  });
  $(".swal2-modal").css('background-color', '<?php echo $_bcolor;?>'); 
        $(".swal2-container.in").css('background-color', 'rgba(43, 165, 137, 0.45)');
});

// fa

document.querySelector(".two").addEventListener("click", function() {
  Swal.fire({
    title: "<span class='titlescos'> Forgot password?</span>",
    icon: 'error',
    iconHtml: '<div class="sr_logo"></div>',
    html: "<p>If you forgot the login password, press and hold the Reset button for about 6 seconds to restore your device to its factory settings. You will then be able to log in using the default login password. You can find the default password from the device label or Quick Start. <br><span class=ssat>Attention</span>: All customized settings will be lost after you restore the device to its factory settings.</p>",
    showCancelButton: false,
    confirmButtonText: "Ok",
    confirmButtonColor: "<?php echo $main_color;?>",
    cancelButtonColor: "#ff0099"
  });
  $(".swal2-modal").css('background-color', '<?php echo $_bcolor;?>'); 
        $(".swal2-container.in").css('background-color', 'rgba(43, 165, 137, 0.45)');
});
</script>
<?php 
}
?>
<?php 
if($title == "Log in"){

  if($_GET['g']){
  
?>
<script>
Swal.fire({
  title: "<span class='titlescos'> You have successfully logged out</span>",
  icon: 'success',
  toast: true,
  position: 'top-end',
  showConfirmButton: true,
  timer: 1000,
  confirmButtonColor: "<?php echo $main_color;?>",
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

setTimeout(function () {
   window.location.href= 'login';
}, 1000);
</script>
<?php 
}
}
?>

        </body>
    </html>