<?php

    include_once "./config/database.php";
    
    $id=$_GET["FID"];
    $query="DELETE FROM feedback where f_id=$id";

    $data=mysqli_query($conn,$query);

    if($data){
        echo" Deleted";
        header("location:ViewFeedback.php");
    }
    else{
        echo"Not able to delete";
    }
    
?>