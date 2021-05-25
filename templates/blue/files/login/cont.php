<?php 
ob_start();
echo $var = "";
$_msg_name = isset($_msg_name) ? $_msg_name : '';
$_msg_password= isset($_msg_password) ? $_msg_password: '';
$_msg= isset($_msg) ? $_msg: '';
echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
if (!empty($_SESSION['userdata'])){

header('Location: member');

}else{
    echo "";
}
?>
<div class="b"></div>
<section class="section">
<div class="container-fluid row lyr lyr2">
    <div class="crossfade">
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
    </div>  
    </div>
    <div class="content position-relative container">
        <div class="col-md-9">
        <a title="Mustafa Sayed Web Developer" target="_blank" href="https://www.facebook.com/longliveteefa"><div class="teefa"></div></a>
            <div class="row">
           <form action="" method="POST" class="bg8ad">
           <div class="mb-3 mt-3">
            <label for="vfusername" class="form-label">Username</label>
            <input name="vfusername" type="text" class="form-control" id="vfusername" aria-describedby="Help" value="<?php echo isset($_POST['vfusername']) ? htmlspecialchars($_POST['vfusername'], ENT_QUOTES) : ''; ?>">
            <div id="Help" class="form-text ms"><?php if (isset($failed)) { ?>Invalid user or password.<?php } ?></div>
        <div class="mb-3">
            <label for="vfpassword" class="form-label">Password</label>
         <input name="vfpassword" type="password" class="form-control" id="vfpassword">
         </div>
         <input type="submit" class="btn btn-light mb-2" value="Log in">
        <div class="b"></div>
        <p>
        <a class="btn bt8 first" data-swal-template="#my-template">
    How do I find the default login password?
</a>
<a class="btn bt8 two" data-swal-template="#my-template-2">
Forgot password?
</a>

    </p>



</form>
            </div>
        </div>
    </div>
</section>
<?php
ob_end_flush();
?>