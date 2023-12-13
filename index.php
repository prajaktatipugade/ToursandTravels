<?php

@include 'config.php';

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($link, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if (mysqli_num_rows($select_cart) > 0) {
      $message[] = 'product already added to cart';
   } else {
      $insert_product = mysqli_query($link, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Grand Coffee</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

       <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"></script>

</head>

<body>
<!-- Navbar -->
  <!-- banner section start -->


  <div class="banner_section layout_padding">
      <div class="container1">
         <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="#about_section" class="nav-item nav-link">About</a>
                    <a href="#services_section_2" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">trav</a>
                        <div class="dropdown-menu m-0">
                            <a href="#team" class="dropdown-item">Travel Guides</a>
                            <a href="#testi" class="dropdown-item">Testimonial</a>
                            <a href="#Adventure" class="dropdown-item">Adventures/a>
                        </div>
                    </div>
                    <a href="#product" class="nav-item nav-link "><i class="fas fa-cart-arrow-down"></i></a>
                    <a href="cart.php" class="nav-item nav-link "><i class="fas fa-bell"></i></a>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-user"></i></a>
                        <div class="dropdown-menu m-0">
                            <a href="login.php" class="dropdown-item">login</a>
                            <a href="logout.php" class="dropdown-item">logout</a>
                            <a href="adminlogin.html" class="dropdown-item">admin login</a>
                            <a href="adminlogout.html" class="dropdown-item">admin logout</a>
                            
                        </div>
                    </div>
                </div>
               
            </div>
        </nav>
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active"> 
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="banner_taital">
                           <h1 class="outstanding_text">Never Stop</h1>
                           <h1 class="coffee_text">EXPLORING</h1>
                           <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                              majority have suffered alteration in some form, by injected humour, </p>
                           <div class="learnmore_bt"><a href="#">Read More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="banner_taital">
                           <h1 class="outstanding_text">Make Tour</h1>
                           <h1 class="coffee_text">AMAZING</h1>
                           <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                              majority have suffered alteration in some form, by injected humour, </p>
                           <div class="learnmore_bt"><a href="#">Learn More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="banner_taital">
                           <h1 class="outstanding_text">Explore The</h1>
                           <h1 class="coffee_text">NEW WORLD</h1>
                           <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the
                              majority have suffered alteration in some form, by injected humour, </p>
                           <div class="learnmore_bt"><a href="#">Learn More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
   </div>

   <!-- banner section end -->
   <!-- banner section end -->
   <!-- Adventure idea -->
   <div class="gallery_section_2 layout_padding">
      <div class="">
         <div class="Adventure" id="Adventure">
            <center>
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Adventures</h6>
                <h1>Adventure idea!!</h1>
            </div>
            </center>

            <div class="row">
               <div class="col-md-3 adventure1">
                  <div class="container_">
                     <img
                        src="https://media.gettyimages.com/id/547436912/photo/bungee-jumping.jpg?s=612x612&w=0&k=20&c=yGAdtv_o5h9uzsLhHFxU9al_H-3EzgSCuqRiJ9Hq08A="
                        alt="Avatar" class="image2"><br><br>
                     <p class="advent">Bungee Jump</p>
                     <p class="tation">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                     <button class="read">Read More</button>
                     <div class="overlay">
                        <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 adventure">
                  <div class="container_">
                     <img
                        src="https://th.bing.com/th/id/OIP.VPAd28C3Cg8kPrXdplO5rgHaDt?w=321&h=175&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                        alt="Avatar" class="image2">
                     <br><br>
                     <p class="advent">Zip Lines</p>
                     <p class="tation">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                     <button class="read">Read More</button>

                  </div>
               </div>
               <div class="col-md-3 adventure">
                  <div class="container_">
                     <img
                        src="https://media.istockphoto.com/id/1188850437/photo/two-boys-enjoying-kayaking-on-lake.webp?b=1&s=170667a&w=0&k=20&c=Pcd5U2jo8qhRYMn3Dg18wnglKy8Kz-KbEjSmRpTlEbE="
                        alt="Avatar" class="image2"><br><br>
                     <p class="advent">Canoeing</p>
                     <p class="tation">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                     <button class="read">Read More</button>
                  </div>
               </div>
               <div class="col-md-3 adventure">
                  <div class="container_">
                     <img src="https://cdn.pixabay.com/photo/2014/03/23/19/57/rafting-293542_640.jpg" alt="Avatar"
                        class="image2"><br><br>
                     <p class="advent">Kayaking</p>
                     <p class="tation">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                     <button class="read">Read More</button>
                  </div>
               </div>
            </div>
         </div>


         <!-- about section start -->
         <div class="about_section layout_padding" id="about_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <div class="about_taital">Memorable Outdoor Experience</div>
                        <p class="about_text">Full cleaning and housekeeping services for companies and households.</p>
                        <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                           Lorem
                           Ipsum has been the industry's standard dummy text.Lorem Ipsum is simply</p>
                        <div class="read_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="about_img"><img src="image/22.jpg"></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- about section end -->

         <!-- gallery section start -->
        
<!-- gallery section end -->

      <!-- services section start -->
      <div class="services_section layout_padding" id="services_section">
         <div class="container">
            <div class="row">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">services</h6>
                <h1>What we Offer</h1>
            </div>
            </div>
            <div class="services_section_2" id="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="image/adventure.png" class="image_1">
                           <img src="image/adventure.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Family Trips</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="image/icon5.png" class="image_1">
                           <img src="image/icon5.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Complete Guid</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="image/icon4.png" class="image_1">
                           <img src="image/icon4.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Adventure Trail</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital"></h1>
                  <p class="services_text"></p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="image/kayak.png" class="image_1">
                           <img src="image/kayak.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Various Adventure</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="image/backpack.png" class="image_1">
                           <img src="image/backpack.png" class="image_2">
                        </div>
                        <h3 class="decorate_text">Custom Packages</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img
                              src="https://cdn1.iconfinder.com/data/icons/adventure-outline-1/64/Adventure-Line-13-64.png"
                              class="image_1">
                           <img
                              src="https://cdn1.iconfinder.com/data/icons/adventure-outline-1/64/Adventure-Line-13-64.png"
                              class="image_2">
                        </div>
                        <h3 class="decorate_text">Train Guides</h3>
                        <p class="tation_text">Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                        </p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
 <!-- Product Start -->
 <div class="product bg-secondary">

<div class="producttt" style="padding:10px" id="product"><?php @include 'product.php'?></div>
</div>

    <!-- Product End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3" id="team">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">Guide Name</h5>
                            <p class="m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
         
            <div class="client_section layout_padding">
            <div class="container">
               <div class="row">
               <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Say Our Clients</h1>
            </div>
            </div>
               </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="testi">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_section_2">
                        <div class="container">
                           <div class="row">
                            
                                
                               
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                          <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;"></center>
                            
                        </div>
                        <div class="text-center py-4 ">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0" >
                          <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;"></center>
                            
                        </div>
                        <div class="text-center py-4">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                          <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;"></center>
                            
                        </div>
                        <div class="text-center py-4">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        </div>
                    </div>
                        
                    </div>
                </div>
               
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="container">
                        <div class="row">
                            
                                
                               
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                                      <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;"></center>
                                        
                                    </div>
                                    <div class="text-center py-4">
                                <h5 class="mb-0">John Doe</h5>
                                <p>New York, USA</p>
                                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                                      <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;"></center>
                                        
                                    </div>
                                    <div class="text-center py-4">
                                <h5 class="mb-0">John Doe</h5>
                                <p>New York, USA</p>
                                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                                      <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3 " src="img/testimonial-3.jpg" style="width: 80px; height: 80px;"></center>
                                        
                                    </div>
                                    <div class="text-center py-4">
                                <h5 class="mb-0">John Doe</h5>
                                <p>New York, USA</p>
                                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                                    </div>
                                </div>
                                    
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="container">
                        <div class="row">
                            
                                
                               
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                                      <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;"></center>
                                        
                                    </div>
                                    <div class="text-center py-4">
                                <h5 class="mb-0">John Doe</h5>
                                <p>New York, USA</p>
                                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                                      <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;"></center>
                                        
                                    </div>
                                    <div class="text-center py-4">
                                <h5 class="mb-0">John Doe</h5>
                                <p>New York, USA</p>
                                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                                <div class="team-item bg-white mb-4">
                                <div class="team-img position-relative overflow-hidden bg-secondary" style="padding:10px 0">
                                      <center><img class="bg-white rounded-circle shadow p-1 mx-auto mb-3 bg-secondary" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;"></center>
                                        
                                    </div>
                                    <div class="text-center py-4">
                                <h5 class="mb-0">John Doe</h5>
                                <p>New York, USA</p>
                                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                                    </div>
                                </div>
                                    
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- testimonial section end -->
         
    </div>
    <!-- Testimonial End -->
        


      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">About</h3>
                  <p class="footer_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et
                     dolore
                     magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Useful Link</h1>
                  <p class="dummy_text">Adipiscing Elit, sed do Eiusmod Tempor incididunt </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Contact Us</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address
                                 :Loram Ipusm</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call :
                                 +01
                                 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email
                                 :
                                 demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->

      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Go-See!</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
</body>

</html>