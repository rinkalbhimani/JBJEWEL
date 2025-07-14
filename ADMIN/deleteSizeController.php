<?php

    include_once "./config/database.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM `about-us` where a_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo" Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>