<?php

    include_once "./config/database.php";
    
    $id=$_POST['submit'];
    $query="DELETE FROM feedback where f_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo" Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>