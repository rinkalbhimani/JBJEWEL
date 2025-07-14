<?php

    include 'database.php';
    if(isset($_GET['id']))
    {
        $uid = $_GET['id'];
        $sql = "DELETE FROM add_cart WHERE id='$uid'";
        $result=$conn->query($sql);
        if($result==TRUE)
        {
            header('location:manageCart.php');
        }
    }

?>