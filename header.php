<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>JB Jewel Design shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/jbicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/JBLOGO.jpg"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="dashboard.html"><img src="images/JBLOGO.jpg" class="logo" alt="" width=
                    "100" height="100"><BR><font color=""><b>JB JEWEL</b></font></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="dashboard.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="Category.php">Category</a></li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link"  href="Category.php" data-toggle="dropdown">Category</a></li> -->
                            <!--<ul class="dropdown-menu">
                            
<!--                             
                            // include 'database.php';
                            // $sql="SELECT * FROM category";
                            // $_result=$conn->query($sql);
                            //     while($row=$result->fetch_assoc())
                            //     {
                            //         echo '<li><a href="Silver.php" style="color:white;">'.{$row['cat_nm']}.'</a></li>';
                            //        // echo '<li><a href="Gold.php"style="color:white;">'.{$row['cat_nm']}.'</a></li>';
                            //        // echo '<li><a href="RoseGold.php" style="color:white;">'.{$row['cat_nm']}.'</a></li>';
                            //     }
							 -->
<!--                              
                            //  include 'database.php';
                            //  $sql = "SELECT * FROM category";
                            //  $result=$conn->query($sql);
                            //  if(result->num_rows > 0)
                            //  {
                            //     while($row=$result->fetch_assoc())
                            //     {
                            //         echo "<li><a   style='color:white; href='Silver.php?cat_id=".$row['id']."'>".row['name']."</a></li>";
                            //     }
                            //  }
                             
                            //  <li><a href="Silver.php" style="color:white;">Silver</a></li>
                            //  <li><a href="Gold.php" style="color:white;">Gold</a></li>
                            //  <li><a href="RoseGold.php" style="color:white;">RoseGold</a></li>
                            </ul>
                        </li>-->
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="Feedback.php">FEEDBACK</a></li>
                        <?php
                        if($_SESSION['username'])
                        { ?>
                            <li class="nav-item"><a class="nav-link" href="manageCart.php">My Cart</a></li>
                            <?php 
                               
                        }
                        else
                        { ?>
                            <li class="nav-item"><a class="nav-link" href="login.php">Log in</a></li>
                        <?php }
                        ?>
                      
                        <li class="nav-item"><a class="nav-link" href="logout.php">Sign Out</a></li>
                         <!-- <li class="nav-item"><a class="nav-link" href="Feedback.php">Feedback </a></li>  -->
                        <!-- <li class="nav-item"><a class="nav-link" href="Checkout.php">Checkout</a></li> -->
                         
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <!-- <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
								<p>My Cart</p>
							</a>
						</li>
                    </ul>
                </div> -->
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">₹80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">₹60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">₹400.00</span></p>
                        </li>
                        <li class="total">
                            <a href="MyCart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: ₹180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

</body>