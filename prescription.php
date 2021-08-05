<?php
include 'header.php';

$doctor_email=$_GET['email'];
$student_id=$_GET['student_id'];

$query = "SELECT * FROM doctor WHERE email = '$doctor_email' ";

$result = $conn->query($query);

while($row = $result->fetch_assoc()){


        $doctor_name=$row["user_name"];
        $contact=$row["contact"];
        $doc_info=$row["professional_info"];



}



?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Cuet Medical Center</title>
      <!--
         Template 2098 Health
         
         http://www.tooplate.com/view/2098-health
         
         -->
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
   </head>
   <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
      <!-- PRE LOADER -->
      <section class="preloader">
         <div class="spinner">
            <span class="spinner-rotate"></span>
         </div>
      </section>

      <section class="navbar navbar-default navbar-static-top"> <!--role="navigation"-->
         <div class="container">
            <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon icon-bar"></span>
               <span class="icon icon-bar"></span>
               <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO TEXT HERE -->
                <a href="prescription.php" class="navbar-brand"> <img style="margin-top: -25px" src="images/cuetlogo.png" width="60" height="72" alt=""></a>
               <a href="prescription.php" class="navbar-brand">Cuet Medical Center</a>
            </div>
            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="doctor_profile.php" class="smoothScroll"  <!--data-toggle="modal" data-target="#modalLRForm"-->Home</a></li>
                  <li><a href="index.php" class="smoothScroll" <!--data-toggle="modal" data-target="#modalLRFormDoc"-->Logout</a></li>
                <!--  <li><a href="#team" class="smoothScroll">Doctors</a></li>
                  <li><a href="#news" class="smoothScroll">News</a></li>
                  <li><a href="#google-map" class="smoothScroll">Contact</a></li>-->
                 <!-- <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>-->
               </ul>
            </div>
         </div>
      </section>
      <!-- Main Body -->
	  <div class="container">
		<h2 style="text-align:center">Cuet Medical Center</h2>
	  </div>
 <form method="post" action="pdf/test.php" >
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="table-responsive">
               <!--Table-->
                  <table class="table table-bordered"">
                     <h3>Student Information</h3>
                     
						 
						  <tbody>
							<tr >
							    <input type="text" name="doctor_name" hidden value="<?php echo $doctor_name ?>">
                                <input type="text" name="contact" hidden value="<?php echo $contact ?>">
                                <input type="text" name="doc_info" hidden value="<?php echo $doc_info ?>">

                                <td>Name:<input type="text" name="name" class="form-control"/></td>
							  <td>Age:<input type="text" name="age" class="form-control"/></td>
                                
                                <td>Hall:<input type="text" name="hall_name" class="form-control"/></td>
								<td>Date:<input type="text" name="date" class="form-control"/></td>
							</tr>
      			  </tbody>
						
                  </table>
                  
                  <!--Table-->
               </div>
			   
            </div>
            
         </div>
         <hr size="30">
      </div>
	  
	  
	  
	  
	  
	  
      <!-- Doc info + post -->
     <div class="container">
 <div class="row">
            <div class="col-sm-6">
               <div class="table-responsive">
                  <!--Table-->
                 
                     <h3>Information</h3>
                     
						 
						  <tbody>
							<tr >
							  
							  <td>Symtoms:<input type="text" name="Symtoms" class="form-control"/></td>
							  <td>Probable Disease:<input type="text" name="disease" class="form-control"/></td>
							  <td>Suggested test:<input type="text" name="test" class="form-control"/></td>
							  <td>Report Analysis:<input type="text"  name="report_analysis"class="form-control"/></td>
							  <td>Initial Medicine:<input type="text" name="initial_medicine" class="form-control"/></td>
                                <div class="form-group col-sm-6">
                                    <input type="text" name="doctor"  hidden value="<?php echo $doctor_email;?>">
                                    <input type="text" name="student" hidden value="<?php echo $student_id;?>">
                                    <h3>Next Appoinment:</h3>
                                    <input type="text" name="next_apoinment" class="form-control" id="usr">
                                </div>
							</tr>
							
							
						  </tbody>
						
                 
                  
                  <!--Table-->
               </div>
			   
            </div>
			
			 <div class="col-sm-6">
               <div class="table-responsive">
                  <!--Table-->
				  <h3 style="margin-bottom:20px">Information</h3>
                  <table class="table table-bordered"">
                     
					  <thead>
						<tr>
						  <th scope="col">Serial</th>
						  <th scope="col">medicine</th>

						</tr>
					  </thead>
					  <tbody>
						<tr>
                            <th scope="row">1</th>
                            <td><input type="text" class="form-control" name="med1"/></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><input type="text" class="form-control" name="med2"/></td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><input type="text" class="form-control" name="med3"/></td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td><input type="text" class="form-control" name="med4"/></td>

                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td><input type="text" class="form-control" name="med5"/></td>

                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td><input type="text" class="form-control" name="med6"/></td>

                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td><input type="text" class="form-control" name="med7"/></td>

                        </tr>

						
					  </tbody>
					
						
                  </table>
                  
                  <!--Table-->
               </div>

            </div>
            

 </div>
			
         </div>
   <hr size="30">
   </div>
  

	  
	  <div class="container">
	  <input type="submit" class="btn btn-success"  style="margin-top:20px" value="submit">
	  </div>
	  
	  </form>
      <!-- Doc info + post -->
      <!-- Main Body -->
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
                           <a href="#">
                              <h5>Amazing Technology</h5>
                           </a>
                           <span>March 08, 2018</span>
                        </div>
                     </div>
                     <div class="latest-stories">
                        <div class="stories-image">
                           <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                        </div>
                        <div class="stories-info">
                           <a href="#">
                              <h5>New Healing Process</h5>
                           </a>
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
                           | Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a>
                        </p>
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
		 <form>
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

