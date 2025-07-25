<?php
   session_start();
   include_once "./config/database.php";

?>
  <style>
@import url('https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700&display=swap');
* {
    margin: 0;
    padding: 0;
    font-family: 'Work Sans', sans-serif;
    font-size: 18px;
}

.user-cart span{
    background-color:red; 
    padding-right:3px; 
    padding-left:3px;  
    border-radius:10px; 
    font-size:18px;
    margin-left:-1.2rem;
}

/*********** admin dashboard styling **********/
  .card{
      background-color: #3B3131;
      padding:20px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 8px 5px 5px #3B3131;
  }

/************************** for sidebar ***********************************/

  /* The sidebar menu */
  .sidebar {
      height: 100%; /* 100% Full-height */
      width: 0; /* 0 width - change this with JavaScript */
      position: fixed; /* Stay in place */
      z-index: 1; /* Stay on top */
      top: 0;
      left: 0;
      background-color: #3B3131; /* Black*/
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 60px; /* Place content 60px from the top */
      transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
    }
    
    /* The sidebar links */
    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 22px;
      color: #fff;
      display: block;
      transition: 0.3s;
    }
    
    .sidebar .side-header{
          margin-left: 30px;
          margin-bottom: 8px;
          color: #fff;
      }

    /* When you mouse over the navigation links, change their color */
    .sidebar a:hover {
      background-color: #584e46;
    }
    
    /* Position and style the close button (top right corner) */
    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 2px;
      font-size: 34px;
      margin-left: 50px;
    }
    
    /* The button used to open the sidebar */
    .openbtn {
      font-size: 20px;
      cursor: pointer;
      padding: 10px 15px;
      border: none;
      color: #fff;
      background-color:#584e46;
    }
    
    .openbtn:hover {
      color: #ECDAC9;
    }
    
    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
      transition: margin-left .5s; /* If you want a transition effect */
      padding: 20px;
    }
    
    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {padding-top: 15px;}
      .sidebar a {font-size: 18px;}
    }

/************************** product table styling *********************************/

  table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    border-radius: 12px 12px 0 0;
    margin-bottom: 50px;
  }

  td,
  th {
    padding: 10px 16px;
    text-align: center;
  }

  th {
    background-color: #584e46;
    color: #fafafa;
    font-family: 'Open Sans', Sans-serif;
    font-weight: bold;
  }

  tr {
    width: 100%;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
  }

  tr:nth-child(even) {
    background-color: #eeeeee;
  }


/************************ login and sign up styling  ******************************/

.card-container.card-account {
  max-width: 500px;
  padding: 30px 30px;
}

.btn {
  font-weight: 700;
  height: 36px;
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none;
  cursor: default;
}

/*
* Card component
*/
.card-account{
  background-color: #ECDAC9;
  /* just in case there no content*/
  padding: 20px 25px 30px;
  margin: 0 auto 25px;
  margin-top: 40px;
  /* shadows and rounded borders */
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
  width: 96px;
  height: 96px;
  margin: 0 auto 10px;
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}

/*
* Form styles
*/
.profile-name-card {
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  margin: 10px 0 0;
  min-height: 1em;
}

.reauth-email {
  display: block;
  color: #404040;
  line-height: 2;
  margin-bottom: 10px;
  font-size: 14px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
  direction: ltr;
  height: 44px;
  font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  z-index: 1;
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.form-signin .form-control:focus {
  border-color: #ab9787;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #8a7a6d;
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #8a7a6d;
}

.btn.btn-signin {
  
  background-color: #584e46;
  padding: 2px;
  font-weight: 700;
  font-size: 16px;
  height: 36px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  border: none;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
  background-color: #a56a39;
}


.box {
  position: relative;
  background-color: #000;
}

.image {
  opacity: 1;
  display: block;
  max-width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
  object-fit: contain;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.box:hover .image {
  opacity: 0.3;
}

.box:hover .middle {
  opacity: 1;
}

.text {
  background-color: #584e46;
  color: #fff;
  font-size: 16px;
  padding: 6px;
  border-radius: 5px;
}

/* *******************   cart to login icon styling   ********************* */
.cart-login-btn{
  margin:5px;
  border-style: outset;
}
.cart-login-btn a i{
  padding: 10px;
  font-size:30px; 
  color:#584e46;              
}
.cart-login-btn a i:hover{  
  color: grey;
}


/* ****************************   footer  *************************** */
.footer-hover{
  color: #000;
}

.footer-hover:hover{
  color: #ECDAC9;
  text-decoration: none;
}

 </style>     
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
    
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
        <!-- <div><font color="white">Log Out</font></div> -->
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    
</nav>
<!-- Sidebar -->

<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    
    <h5 style="margin-top:10px;">
    <?php
        if($_SESSION['username']){                
            echo "Hello ".$_SESSION['username'];
        }
        else
        {
            header("location:index.php");
        }
        ?>
    </h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./dashboard.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="#customers"  onclick="showCustomers()" ><i class="fa fa-users"></i> Customers</a>
    <a href="#category"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Category</a>
    <a href="#sizes"   onclick="showSizes()" ><i class="fa fa-th"></i> about us</a>
    <a href="#productsizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i> Gallery</a>    
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th"></i> Products</a>
    <a href="ViewContact.php"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Contact-Us</a>
    <a href="ViewFeedback.php"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Feedback</a>
    <a href="viewAllCart.php" onclick="showOrders()"><i class="fa fa-list"></i> Cart</a>
    <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i> Orders</a>

    <!-- <a href="adminGallery.php" onclick="showProductItems()"><i class="fa fa-list"></i> Gallery</a> -->
    <a href="logout.php" onclick="showOrders()"><i class="fa fa-sign-out"></i> Logout</a>
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home" ></i></button>
</div>

