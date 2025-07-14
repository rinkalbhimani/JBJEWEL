<?php

    session_start();
    unset($_SESSION['nam']);
    header('location:manageCart.php');

?>