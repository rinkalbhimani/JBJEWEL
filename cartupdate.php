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
    <style>
        table{
            border-collapse: collapse;
            margin-left: 650px;
        }
        tr,td{
            padding: 5px 10px;
        }
    </style>
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
                    <h2>Update Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">home</a></li>
                        <li class="breadcrumb-item active">Update Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <?php
      include 'database.php';
      if(isset($_POST['update']))
      {
        $uid = $_POST['uid'];
        $qty = $_POST['upqty'];
        
        $data = "UPDATE add_cart SET quntity='$qty' WHERE id='$uid'";
        $record = $conn->query($data);
        if($record == TRUE)
        { ?>
            <script>
                alert("Quntity Updated Successfully");
                window.location.href='manageCart.php';
            </script>
        <?php }
      }
      if(isset($_GET['id']))
      {
        $uid = $_GET['id'];
        $sql = "SELECT * FROM add_cart WHERE id = '$uid'";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $upid = $row['id'];
                $pnm = $row['pro_name'];
                $pprice = $row['pro_price'];
                $qtt = $row['quntity'];
                $pimg = $row['pro_image'];

            }
        }
      }
    ?>
    <br>
    <div>
      <table>
        <tr>
            <td><img src="<?php echo $pimg; ?>" style="height:150px; width:150px;"></td>
        </tr>
        <tr>
            <td><?php echo $pnm; ?></td>
        </tr>
        <tr>
            <td><?php echo $pprice; ?></td>
        </tr>
        <tr>
            <td>
                <form method="POST">
                <input type="number" value="<?php echo $qtt; ?>" name="upqty">
                <input type="hidden" value="<?php echo $upid; ?>" name="uid">
            </td>
        </tr>
        <tr>
            <td>
                    <input type="submit" value="update" name="update">
                </form>
            </td>
        </tr>
      </table>
                    
    </div>  

    
 