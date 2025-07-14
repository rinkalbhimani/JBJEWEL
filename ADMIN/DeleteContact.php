<?php

    include_once "./config/database.php";
    
    $id=$_GET['CID'];
    $query="DELETE FROM contact where c_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"contact Deleted";
    }
    else{
        echo"Not able to delete";
    }
    header("location:ViewContact.php");
?>