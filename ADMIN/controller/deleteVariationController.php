<?php

    include_once "../config/database.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM gallery where g_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"variation Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>