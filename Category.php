<?php

    include 'header.php';

?>
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Category</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1> CATEGORY</h1>
                        <p>Some jewelry styles will never go out of vogue. It will always give the ideal touch of glitz to your daytime and evening ensembles. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                        <?php
                    include 'database.php';
                    $query="SELECT * FROM category ";
                    $result=$conn->query($query);
                    while($row=$result->fetch_assoc())
                    { ?>
                        
                    <!-- <button data-filter=".bulbs"><a href="Product.php?CID=<?php echo $row["cat_nm"]; ?>"></a></button>                  -->
                    <a href="Product.php?CID=<?php echo $row["c_id"]; ?>"><input type="submit" value="<?php echo $row["cat_nm"]; ?>"></a>

                    <?php }	
                    echo "</div></div></div></div> ";
                   ?>