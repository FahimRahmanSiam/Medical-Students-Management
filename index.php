<?php

if (isset($_SESSION)){
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>JU Medical Center</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-style.css">

    <!-- Signup-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cuet medcial center</title>
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- Bootstrap core CSS -->
    <!--  <link href="signup/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Material Design Bootstrap -->
    <link href="signup/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="signup/css/style.css" rel="stylesheet">
    <!-- Signup end-->



</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<!-- Student Registration-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body Login Student-->
                        <div class="modal-body mb-1">
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label for="email_st">Email address:</label>
                                    <input type="email" class="form-control" name="email" required id="email_st">
                                </div>
                                <div class="form-group">
                                    <label for="student_id">Student Id</label>
                                    <input type="text" class="form-control" name="s_id" required id="student_id">
                                </div>
                                <div class="form-group">
                                    <label for="password_st">Password:</label>
                                    <input type="password" class="form-control" name="password" required id="password_st">
                                </div>


                                <input type="submit" class="btn btn-default" name="login" value="Login">
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <form method="post" action="login.php" >    <!--Body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="student_name">Student Name:</label>
                                    <input type="text" class="form-control" id="student_name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="student_id_rg">Student Id:</label>
                                    <input type="text" class="form-control" id="student_id_rg"  name="s_id" required onchange="myFunction(this.value)">
                                </div>
                                <div class="form-group">
                                    <label for="hall_name">Hall Name:</label>
                                    <!--<input type="text" class="form-control" id="hall_name"  name="hall" required> --> <!--onchange="myFunction(this.value)"-->
									<select class="form-control" id="hall_name" name="hall" required>
                                        <option value="Bangabandhu Hall">Bangabandhu Hall</option>
                                        <option value="Shaheed Rafiq Jabbar  Hall">Shaheed Rafiq Jabbar Hall</option>
										<option value="Mir Mosharrof Hossain Hall">Mir Mosharrof Hossain Hall</option>
                                        <option value="Rabindranath Hall">Rabindranath Hall</option>
										<option value="Jahanara Imam Hall">Jahanara Imam Hall</option>
                                        <option value="Preetilota Hall">Preetilota Hall</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="student_father_name">Father Name:</label>
                                    <input type="text" class="form-control" id="student_father_name" name="f_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="student_mother_name">Mother Name:</label>
                                    <input type="text" class="form-control" id="student_mother_name" name="m_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="birth_date">Birth-date:</label>
                                    <input type="text" class="form-control" id="birth_date" placeholder="22/10/1995" name="b_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email_st" >Email address:</label>
                                    <input type="email" class="form-control" id="email_rg" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="password_st">Password:</label>
                                    <input type="password" class="form-control" id="password_rg" name="password" required>
                                </div>


                                <input type="submit" class="btn btn-default" name="register" value="Register" required>

                            </div>
                        </form>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->

<!-- Doctor Registration-->
<div class="modal fade" id="modalLRFormDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel0" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel1" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel0" role="tabpanel">

                        <!--Body Login Student-->
                        <div class="modal-body mb-1">
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <label for="email_doc">Email address:</label>
                                    <input type="email" class="form-control" name="email" required id="email_doc">
                                </div>

                                <div class="form-group">
                                    <label for="email_doc">Password:</label>
                                    <input type="password" class="form-control" name="password" required id="email_doc">
                                </div>


                                <input type="submit" class="btn btn-default" name="login_doc" value="Login">
                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel1" role="tabpanel">

                        <form method="post" action="login.php" >    <!--Body-->
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="doc_name">Doctor Name:</label>
                                    <input type="text" class="form-control" id="doc_name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_number">Contact Number:</label>
                                    <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                                <div class="form-group">
                                    <label for="blood_group">Blood Group:</label>
                                    <input type="text" class="form-control" id="blood_group" name="blood_group" required>
                                </div>
                                <div class="form-group">
                                    <label for="birth_date">Birth-date:</label>
                                    <input type="text" class="form-control" id="birth_date" placeholder="22/10/1995" name="b_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="p_info">Professional Information:</label>
                                <input type="text" class="form-control" id="p_info"  name="p_info" required>
                            </div>
                                <div class="form-group">
                                    <label for="email_st" >Email address:</label>
                                    <input type="email" class="form-control" id="email_rg" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label for="password_st">Password:</label>
                                    <input type="password" class="form-control" id="password_rg" name="password" required>
                                </div>


                                <input type="submit" class="btn btn-default" name="register_doctor" value="Register" required>

                            </div>
                        </form>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->






<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- HEADER -->
<!--<header>
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-5">
                <p>Welcome to a Cuet Medical Center</p>
            </div>

            <div class="col-md-8 col-sm-7 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> 01710000000</span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 12:00 PM (Sat-Thursday)</span>
                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@cuet.ac.bd</a></span>
            </div>

        </div>
    </div>
</header>-->


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation" style="position:fixed;width:100%">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.php" class="navbar-brand"> <img style="margin-top: -25px" src="images/julogo.png" width="80" height="82" alt=""></a>
            <a href="index.php" class="navbar-brand">JU Medical center</a>
            
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#top" class="smoothScroll" data-toggle="modal" data-target="#modalLRForm">Student</a></li>
                <li><a href="#about" class="smoothScroll" data-toggle="modal" data-target="#modalLRFormDoc">Doctor</a></li>
                <li><a href="#team" class="smoothScroll">Services</a></li>
                <li><a href="#news" class="smoothScroll">Rules and regulations</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
<!--                <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
-->            </ul>
        </div>

    </div>
</section>


<!-- HOME  for slider-->
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="owl-carousel owl-theme">
                <div class="item item-first">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Let's make your life happier</h3>
                            <h1>Healthy Living</h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Aenean luctus lobortis tellus</h3>
                            <h1>New Lifestyle</h1>
                            <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="col-md-offset-1 col-md-10">
                            <h3>Pellentesque nec libero nisi</h3>
                            <h1>Your Health Benefits</h1>
                            <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit volutpat venenatis.</p>
                        <p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula.</p>
                    </div>
                    <figure class="profile wow fadeInUp" data-wow-delay="1s">
                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                        <figcaption>
                            <h3>Dr. Neil Jackson</h3>
                            <p>General Principal</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TEAM -->


<!-- NEWS -->
<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <!-- SECTION TITLE -->
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Latest News</h2>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <a href="news-detail.html">
                        <img src="images/news-image1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>March 08, 2018</span>
                        <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                        <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jeremie Carlson</h5>
                                <p>CEO / Founder</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <a href="news-detail.html">
                        <img src="images/news-image2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>February 20, 2018</span>
                        <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                        <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Jason Stewart</h5>
                                <p>General Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <!-- NEWS THUMB -->
                <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                    <a href="news-detail.html">
                        <img src="images/news-image3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="news-info">
                        <span>January 27, 2018</span>
                        <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                        <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                        <div class="author">
                            <img src="images/author-image.jpg" class="img-responsive" alt="">
                            <div class="author-info">
                                <h5>Andrio Abero</h5>
                                <p>Online Advertising</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--<!-- MAKE AN APPOINTMENT -->
<!--<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img src="images/appointment-image.jpg" class="img-responsive" alt="">
            </div>

            <div class="col-md-6 col-sm-6">
                <!-- CONTACT FORM HERE -->
               <!-- <form id="appointment-form" role="form" method="post" action="#">

                    <!-- SECTION TITLE -->
                   <!-- <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                        <h2>Make an appointment</h2>
                    </div>

                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <div class="col-md-6 col-sm-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="date">Select Date</label>
                            <input type="date" name="date" value="" class="form-control">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <label for="select">Select Department</label>
                            <select class="form-control">
                                <option>General Health</option>
                                <option>Cardiology</option>
                                <option>Dental</option>
                                <option>Medical Research</option>
                            </select>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <label for="telephone">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                            <label for="Message">Additional Message</label>
                            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                        </div>
                    </div>
                </form>-->
            </div>

        </div>
    </div>
</section>-->

<!-- GOOGLE MAP -->
<section id="contact">
  
</section>


<!-- FOOTER -->

<footer data-stellar-background-ratio="5">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                    <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                    <div class="contact-info">
                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                        <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                    <div class="latest-stories">
                        <div class="stories-image">
                            <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="stories-info">
                            <a href="#"><h5>Amazing Technology</h5></a>
                            <span>March 08, 2018</span>
                        </div>
                    </div>

                    <div class="latest-stories">
                        <div class="stories-image">
                            <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="stories-info">
                            <a href="#"><h5>New Healing Process</h5></a>
                            <span>February 20, 2018</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="footer-thumb">
                    <div class="opening-hours">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                        <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                        <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                        <p>Sunday <span>Closed</span></p>
                    </div>

                    <ul class="social-icon">
                        <li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 border-top">
                <div class="col-md-4 col-sm-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2017 Your Company

                            | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-link">
                        <a href="#">Laboratory Tests</a>
                        <a href="#">Departments</a>
                        <a href="#">Insurance Policy</a>
                        <a href="#">Careers</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 text-align-center">
                    <div class="angle-up-btn">
                        <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>

<!-- SCRIPTS -->
<script type="text/javascript" src="signup/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="signup/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="signup/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="signup/js/mdb.min.js"></script>


</body>
</html>

<script>

    function myFunction(str) {
        console.log("here");
        var value =str;
        $.ajax({
            type: "POST",
            url: "check_duplicate.php",
            data: {
                student_id: value,
            },
            success: function (response) {

                if(response == 0) {

                    document.getElementById('student_id_rg').value = '';
                    alert("This id has been registered already");

                }

                // you will get response from your php page (what you echo or print)

            }
        })
    }
 </script>