<?php
    session_start();
    session_destroy();
    header('Location: Cu-login.php');
?>