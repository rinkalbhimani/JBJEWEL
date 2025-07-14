<?php
    include_once "../config/database.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['p_name'];
       // $desc= $_POST['p_desc'];
       $image=$_POST['file'];
        $price = $_POST['p_price'];
        $category = $_POST['category'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./images/";
        $image=$location.$name;

        $target_dir="../images/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO product
         (p_nm,p_image,p_price,c_id) 
         VALUES ('$ProductName','$image',$price,'$category')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>