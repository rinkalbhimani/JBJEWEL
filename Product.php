<?php
include 'header.php';
?>
   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row special-list">
        
    <?php
    include 'database.php';
    
    $id=$_GET['CID'];
       $sql="SELECT * FROM product WHERE c_id=$id";
                    $result=$conn->query($sql);
                    
                    if($result->num_rows>0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            $pname = $row['p_nm'];
                            $pri = $row['p_price'];
                            $pid = $row['p_id'];
                            $imge = $row['p_image'];
                            $uname = $_SESSION['username'];
                            
                           echo '<div class="col-lg-3 col-md-6 special-grid bulbs">
                                <div class="products-single fix">
                                    <div class="box-img-hover">';
                                       
                                     
                                    echo '<br> <img src="'.$row['p_image'].'"class="img-fluid" alt="Image">';
                                    echo '<div class="why-text">';
                                    echo '<h4 name="p_nm">'.$row['p_nm'].'</h4>';
                                    echo '<h5 name="p_price">₹'.$row['p_price'].'</h5>';
                                    echo '<form enctype="multipart/form-data" method="POST">';
                                    echo '<br><input type="number" value="1" name="qty">';
                                    echo '<br><br><button type="submit" name="cart" class="cart" >Add to Cart</button>';
                                    echo '</form>';
                                    echo '</div>';
                                    ?>
                                    </div>
                                </div>
                            </div>
                         <?php }
                    } 
                    if(isset($_POST['cart']))
                    {
                        $qtt = $_POST['qty'];
                        $addcart = "INSERT INTO add_cart(pro_name, pro_price, quntity, pro_image, username)VALUES('$pname','$pri','$qtt','$imge','$uname')";
                        $re = $conn->query($addcart);
                        if($re == TRUE)
                        { ?>
                            <script>
                                window.location.href="manageCart.php";
                            </script>
                        <?php }
                    }
                    ?>
                    
                    
    
 