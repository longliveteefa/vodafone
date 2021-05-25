<?php 
ob_start();
if (!empty($_SESSION['userdata'])){

header('Location: member');

}else{
    echo "";
}
?>
<div class="b"></div>
<div class="section">
<div class="container-fluid row lyr lyr2">
    </div>
    <div class="content position-relative container">
            <div class="row ">
            <?php 
            foreach($posts as $k=>$v){
                foreach($v as $ke=>$ve){
                    echo '<div class="col-6 col-md-2 mt-3 text-center">
                    <div class="item_set mt-1">
                    <div class="it_e"><a><img class="img_spo" src="templates/blue/images/vodafone_logo_2.png"></a></div>';
                    echo $ke;
                    echo '<br>';
                    echo "<p class=text-break></p>";
                    echo '</div></div>';
                }

            }

            ?>
            </div>
            </div>
        </div>
    </div>
</div>
<?php
ob_end_flush();
?>