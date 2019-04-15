<?php
require 'inc/head.php';

if (session_destroy()) {
    header('Location: login.php');
}
?>


<?php require 'inc/foot.php'; ?>
