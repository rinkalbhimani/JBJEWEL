<?php
    include_once "../config/database.php";
    
    if(isset($_POST['upload']))
    {
       
        $size = $_POST['size'];
       
         $insert = mysqli_query($conn,"INSERT INTO `about-us`
         (a_desc)   VALUES ('$size')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../dashboard.php?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../dashboard.php?size=success");
         }
     
    }
        
?>