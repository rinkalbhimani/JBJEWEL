<?php
    include_once "../config/database.php";

    // $v_id=$_POST['v_id'];
    // $product= $_POST['product'];
    // $size= $_POST['size'];
    // $qty= $_POST['qty'];
   $img=$_POST['file'];
    $updateItem = mysqli_query($conn,"UPDATE gallery SET 
        g_img=$product, 
        size_id=$size,
        quantity_in_stock=$qty 
        WHERE variation_id=$v_id");


    if($updateItem)
    {
        echo "true";
    }
?>