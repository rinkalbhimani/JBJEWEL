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
                        
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="Feedback.php">FEEDBACK</a></li>
                        <?php
                        if($_SESSION['username'])
                        { ?>
                            <li class="nav-item"><a class="nav-link" href="MyCart.php">My Cart</a></li>
                            <?php }
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
                
            </div>
            
        </nav>
        <!-- End Navigation -->
    </header>
   <!-- Start All Title Box -->
   <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">home</a></li>
                        <li class="breadcrumb-item active">My Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php
      include 'database.php';
      $name = $_SESSION['username'];
      $sql = "SELECT * FROM add_cart WHERE username='$name'";
      $result=$conn->query($sql);
      
    ?>
    <div>
    <table class="table m-1">
    <thead>
      <tr>
            <th>Sr No</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Quntity</th>
            <th>Total</th>
            <th>Update Cart</th>
            <th>Remove From Cart</th>
      </tr>
    </thead>
    <tbody>
        <?php
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><img src="<?php echo $row['pro_image']?>" style="height:50px; width:50px;"></td>
                        <td><?php echo $row['pro_name']; ?></td>
                        <td><?php echo $row['pro_price']; ?></td>
                        <td><?php echo $row['quntity']; ?></td>
                        <td>
                            <?php 
                                $pri = $row['pro_price'];
                                $qty1 = $row['quntity'];
                                $bill = $pri * $qty1;
                                echo $bill; 
                            ?>
                        </td>
                        <td><a href="cartupdate.php?id=<?php echo $row['id']; ?>"><img src="images/update.png" style="height:40px; width:40px;"></a></td>
                        <td><a href="cartdelete.php?id=<?php echo $row['id']; ?>"><img src="images/delete.png" style="height:40px; width:40px;"></a></td>
                    </tr>
                <?php }
            }
        ?>
    </tbody>
    </table>
                    
    </div>  

    
 