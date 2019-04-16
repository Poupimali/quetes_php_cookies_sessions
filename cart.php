<?php
require 'inc/head.php';
if (!isset($_SESSION['loginname'])){
    header('Location : index.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (isset($_SESSION['totalCookies'] )){
            foreach ($_SESSION['totalCookies'] as $cookie => $number){
                echo '<p class ="cookie">' . $cookie . ' : ' . $number . '</br></p>';
            }
        }else{
            echo "<p>Malheureusement il n'y a rien dans ton panier.</p>";
        }

        ?>
    </div>
</section>
<?php

require 'inc/foot.php'; ?>
