<?php
require 'inc/head.php';

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            foreach ($_SESSION['totalCookies'] as $cookie => $number){
                echo '<p class ="cookie">' . $cookie . ' : ' . $number . '</br></p>';
            }
        ?>
    </div>
</section>
<?php

require 'inc/foot.php'; ?>
