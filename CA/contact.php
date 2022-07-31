<?php 
  session_start();
  if(isset($_SESSION['admin']))
  {
    header('location:aindex.php');
  }
  elseif(!isset($_SESSION['username']))
  {
    header('location:gindex.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Acorp &mdash; Cylone Antiques</title>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <?php   include 'connection.php' ?>
  </head>
  <body>
  
   <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="border-bottom top-bar py-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong>Phone:</strong> <a href="tel://#">0712342340</a></span>
              <span><strong>Email:</strong> <a href="#">cyloneantiques@acorp.com</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="https://www.facebook.com" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="https://www.twitter.com" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="https://www.instagram.com" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="https://www.linkedin.com" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div> 
    </div>
    <!-- Search Modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>
                        <!-- Form -->
                        <form method="POST" action="search.php">
                            <input type="text" name="insearch" class="form-control" placeholder="Search and hit enter..." >
                              <br>
                            <button type="submit" class="btn btn-primary btn-md" style="margin-left:40%" name="setsearch">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** Top Search Area End ***** -->

    <!-- ***** User Model ***** -->  
        <div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 2000">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn btn-danger btn-s" data-dismiss="modal" style="margin-left: 97%;margin-top: -3vw;"><span class="icon-close"></span></button>

                        <!-- Table -->
                        <div>
                            
<?php

  $username=$_SESSION['username'];

      $dis=mysqli_query($con,"SElECT * FROM customers WHERE username='$username'") or mysqli_error("server error");

      while ($row=mysqli_fetch_array($dis)) 
      {
        echo "
        <table cellspacing='0' style='text-align: center;'>
        <tbody>";
        echo "<h2 style='color: darkblue'>".$row['username']." <span class='icon-account_circle'></span></h2></tr>";
        echo "<tr><th>First Name</th><td id='t'>".$row['fname']."</td></tr>";
        echo "<tr><th>Last Name</th><td id='t'>".$row['lname']."</td></tr>";
        echo "<tr><th>Address</th><td id='t'>".$row['address']."</td></tr>";
        echo "<tr><th>Email</th><td id='t'>".$row['email']."</td></tr>";
        echo "<tr><th>Phone</th><td id='t'>".$row['phone']."</td></tr>";
        echo "<tr><th>Country</th><td id='t'>".$row['country']."</td></tr>";
        echo "<tr><th>Payment Method</th><td id='t'>".$row['method']."</td></tr>";
        echo "
        </tbody>
        </table>
        <br>
        <a href='changedetails.php'>Change Details</a>
        ";
      }


?>
                        </div>

                        <a href="logout.php" class="btn btn-warning btn-md" style="margin-left: 75%;position: relative">LogOut</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- ***** End of the UserModal ***** -->
    <header class="site-navbar py-4" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="contact.php" class="text-black h2 mb-0">Contact</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li ><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="Categories.php">Categories</a>
                  <ul class="dropdown">
                    <li><a href="Wooden.php">Wooden</a></li>
                    <li><a href="Metalic.php">Metalic</a></li>
                    <li><a href="Cerimic.php">Cerimic</a></li>
                    <li><a href="Jewells.php">Jewells</a></li>
                  </ul>
                </li>
                <li><a href="about.php">About</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              <li><a href="#" data-toggle="modal" data-target="#UserModal">User <span class="icon-account_circle"></span></a></li>
                <li><a href="cart.php" id="SignUp">Cart <span class="icon-shopping-cart"></span></a></li>
                <li>
                <li>
                  <a href="#" class="search-icon" data-toggle="modal" data-target="#searchModal">
                      <span class="icon-search"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
    <!-- ***** Breadcrumb Area Start ***** -->
      <div class="breadcrumb-area">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><span class="icon-home"></span> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- ***** Breadcrumb Area End ***** -->
    </header>

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/d1img.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
              <a href="index.php"><img src="images/logo.png" height="180" width="300" style="position: absolute;z-index: 2004;margin-top: -1vw;margin-left: -40vw"></a>         
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1>Contact Us</h1>
                <p class="lead mb-5" style="color: gold">We Got the history</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form class="p-5 bg-white" method="POST">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="text" id="subject" name="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message*</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" name="send" class="btn btn-primary btn-md text-white">
                </div>
              </div>
            </form>
    <?php 
            $username=$_SESSION['username'];
            if(isset($_POST['send']))
        {
            $subject=$_POST['subject'];
            $message=$_POST['message'];


                    $query1="INSERT INTO contactpro(uname,subject,message)  values('$username','$subject','$message')";

                
                    $sql1=mysqli_query($con,$query1);

                    if($sql1)
                    {
                        echo "<script type=\"text/javascript\"> alert(\"Message has been Sent..!\")</script>";
                    }
                    else
                    {
                         echo "Somthing is wrong please contact us via phone...";
                    }

        }?>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">01 Main Street,Kadurugashena,Galle,Sri Lanka</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">0712342340</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">cyloneantiques@acorp.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>You can try these ways to contact us. Alternatively you can go any of our branches at your Town.Say anything complains,complements. let us improve our selves.</p>
            </div>

          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>We search for valuble and ancient items,keep them with caution and offer them to you with reasonable prices.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="Categories.php">Categories</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://www.facebook.com" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://www.twitter.com" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.linkedin.com" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Acorp - Cylone Antiques</p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

 
  <script src="js/main.js"></script>
    
  </body>
</html>