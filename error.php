<?php 
include "src.php";
$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
       403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
       404 => array('404 Not Found', 'The document/file requested was not found on this server.'),
       405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
       408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
       500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
       502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
       504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$title_2 = $codes[$status][0];
$message = $codes[$status][1];
if ($title_2 == false || strlen($status) != 3) {
       $message = 'Please supply a valid status code.';
}
$title = "Vodafone";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | <?php echo $title_2;?></title>
    <link rel="stylesheet" href="<?php echo $_url;?>templates/blue/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_url;?>templates/blue/css/style">
    <link rel="icon" href="<?php echo $_url;?>templates/blue/images/info_voda.png" type="image/png">
</head>
<body>
<!--Bodyhere-->
<header>
    <nav class="navbar">
        <div class="col-6 col-md-auto container-fluid">
            <div class="_logo"></div>
            <div class="container d-flex justify-content-center free">
            </div>
           <div class="dev"></div>
        </div>
    </nav>
</header>
<?php 
echo $var = "";
echo htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
?>
<div class="cr">
<div class="b"></div>
<div class="container-fluid">
<h6 class="error_name"><?php echo $title_2;?></h6>
            <h6 class="error_message"><?php echo $message;?></h6>
            <a href="<?= $previous ?>" class="fst-italic error_message">Go Back</a>
</div>
</div>
<footer>


</footer>