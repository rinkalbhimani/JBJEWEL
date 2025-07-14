<?php
    include 'header.php';
?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> 
                         <?php 
                            include "database.php";
                            $query="SELECT * FROM `about-us` where a_id=1";
                            $result=$conn->query($query);
                            while($row=$result->fetch_assoc())
                            {
                                echo ' <img src="'.$row['a_img'].'"class="img-fluid" alt="Image">';
                            }
                           ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top"> <span>Designer Shop</span></h2>
                    <?php
                //session_start();
                include 'database.php';

                $query = "SELECT * FROM `about-us`;";
                $result = $conn->query($query);

                if ($result->num_rows > 0)
                 {
                    while ($row = $result->fetch_assoc())
                    {
                       echo " <p name='desc'>{$row['a_desc']}</p>";
                       
                    }
                 }
                ?>  

    
					<!-- <a class="btn hvr-hover" href="#">Read More</a> -->
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Being associated with or a member of a trade group can give your customers the impression that you 
                            are a trustworthy brand. Being linked to well-known companies. 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>Layering is the best way to express yourself through jewelry; each piece makes a statement, each piece has its story and if curated and layered well, it can enhance your look and make sure you stand out. -
</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Expert</h3>
                        <p>Jewelry is a very personal thing... it should tell a story about the person who’s wearing it Jewelry is the most transformative thing you can wear</p>
                    </div>
                </div>
                <video controls autoplay muted height="50%" width="100%"><source src="video.mp4"></video>        
                </div>
            </div>
        </div> 
    </div>
    <!-- End About Page -->
     <!-- Start Instagram Feed  -->
     <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
           
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpeg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->

    
<?php
include 'footer.php';
?>
