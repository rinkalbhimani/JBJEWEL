<?php
    include_once "../config/database.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO category
         (cat_nm) 
         VALUES ('$catname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../viewCategories.php?category=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../viewCategories.php?category=success");
         }
     
    }
        
?>