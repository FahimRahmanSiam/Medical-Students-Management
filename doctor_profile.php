<?php
require_once 'header.php';

$doctor_email=$_SESSION['doctor_email'];

function resizeImage($resourceType,$image_width,$image_height) {
    $resizeWidth = 400;
    $resizeHeight = 400;
    $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
    return $imageLayer;
}

if(isset($_POST["dpupload"])) {
    $imageProcess = 0;
    if(is_array($_FILES)) {
        $fileName = $_FILES['fileToUpload']['tmp_name'];
        $sourceProperties = getimagesize($fileName);
        $resizeFileName = time();
        $uploadPath = "images/student_profile/";
        $fileExt = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);
        $uploadImageType = $sourceProperties[2];
        $sourceImageWidth = $sourceProperties[0];
        $sourceImageHeight = $sourceProperties[1];
        switch ($uploadImageType) {
            case IMAGETYPE_JPEG:
                $resourceType = imagecreatefromjpeg($fileName);
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                imagejpeg($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                break;

            case IMAGETYPE_GIF:
                $resourceType = imagecreatefromgif($fileName);
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                imagegif($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                break;

            case IMAGETYPE_PNG:
                $resourceType = imagecreatefrompng($fileName);
                $imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                imagepng($imageLayer,$uploadPath."thump_".$resizeFileName.'.'. $fileExt);
                break;

            default:
                $imageProcess = 0;
                break;
        }
        move_uploaded_file($fileName, $uploadPath. $resizeFileName. ".". $fileExt);
        //echo $resizeFileName;
        $loc = "thump_".$resizeFileName.".".$fileExt;
        //echo $loc;
        //echo '<img src=$loc>';
        $imageProcess = 1;
    }

    if($imageProcess == 1){
        $sql="UPDATE doctor SET profile_image='$loc' WHERE email='$doctor_email'";
        $result2 = $conn->query($sql);


        ?>

        <?php
    }else{
        ?>
        <div class="alert icon-alert with-arrow alert-danger form-alter" role="alert">
            <i class="fa fa-fw fa-times-circle"></i>
            <strong> Note !</strong> <span class="warning-message">Invalid Image </span>
        </div>
        <?php
    }
    $imageProcess = 0;
}
?>



<?php

require_once 'header.php';


$doctor_email=$_SESSION['doctor_email'];


$query="SELECT * FROM doctor WHERE email='$doctor_email'";
$result = $conn->query($query);
while($row = $result->fetch_assoc()) {


    $name = $row["user_name"];
    $address = $row["address"];

    $professional_info = $row["professional_info"];
    $b_date = $row["birth_date"];
    $contact = $row["contact"];
    $blood_group = $row["blood_group"];
    $gender = $row["gender"];
    $profile_image=$row["profile_image"];
    $availability=$row["availability"];



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Health - Medical Website Template</title>

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
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>
    </script>
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
<!-- HEADER -->
<!--<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5">
                <p>Welcome to a Professional Health Care</p>
            </div>
            <div class="col-md-8 col-sm-7 text-align-right">
                <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
            </div>
        </div>
    </div>
</header>-->
<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <!-- lOGO TEXT HERE -->
            <a href="doctor_profile.php" class="navbar-brand"> <img style="margin-top: -25px" src="images/cuetlogo.png" width="60" height="72" alt=""></a>
            <a href="doctor_profile.php" class="navbar-brand">Cuet Medical center</a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">



                   <form name="search_form" method="post" action="student_profile_search.php">
                       <div class="col-lg-6">

                           <div class="input-group">
                               <input type="text" name="student_id" class="form-control" placeholder="Search student by ID.">

                               <span class="input-group-btn">
                                 <button class="btn btn-default" type="button" onclick="search_student()">Search</button>
                                  </span>
                           </div><!-- /input-group -->
                       </div>
                   </form>
               <!-- /input-group -->

            <ul class="nav navbar-nav navbar-right">
                <li></li>
<!--                <li><a href="#top" class="smoothScroll" data-toggle="modal" data-target="#modalLRForm">Home</a></li>
-->                <li><a href="#about" class="smoothScroll" data-toggle="modal" data-target="#modalLRFormDoc">Availabity</a></li>

                <li><a href="index.php" class="smoothScroll">Logout</a></li>
                <!--                <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                -->            </ul>
        </div>
    </div>
</section>

<div class="modal fade" id="modalLRFormDoc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel0" role="tab"><i class="fa fa-user mr-1"></i>Set Your Available Schedule</a>
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
                                    <label for="email_doc">Available Date and Time:</label>

                                    <input type="text" class="form-control" name="available_time" required id="available_time" placeholder="Like: Saturday, Sunday  12.00 pm-3.00 pm">
                                </div>
                                <input type="text" hidden name="email_avail" value="<?php echo $doctor_email; ?>"
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default" name="availability" value="Set Availability">

                                </div>

                            </form>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">

                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Main Body -->
<div class="container" style="margin-top:20px">
    <div class="row ">
        <div class="">
            <?php
            if($profile_image==''){

                echo "<img src=\"https://via.placeholder.com/200\" class=\"rounded  img-circle\" alt=\"...\"/>";
            }
            else{
               $loca="images/student_profile/";
                $loc=$loca.$profile_image;
                echo "<img  src=$loc>";
            }
            ?>
        </div>
        <div class="col-sm-6">
            <h4>Update Profile Picture</h4>
            <form action="" id="pp_form" method="post" enctype="multipart/form-data">
                <div class="input-group">
                  <span class="input-group-btn">
                  <span class="btn btn-primary" onclick="$(this).parent().find('input[type=file]').click();">Browse</span>
                  <input type="file" name="fileToUpload" onchange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" style="display: none;" type="file">
                  </span>
                    <span class="form-control"></span>
                </div>
                <div style="margin-top: 20px">
                    <input name="dpupload" type="submit" id="submit" class="btn btn-success"  style="margin-top:20px" value="Submit">
                </div>
            </form>
        </div>
        <!--<input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">-->

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="table-responsive">
                <!--Table-->
                <table class="table table-bordered"">
                <h3>Profile</h3>
                <thead>
               <tr>
                    <th class="col-xs-2">Name:</th>
                    <th class="col-xs-5"><?php echo $name?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Address:</th>
                    <th class="col-xs-5"><?php echo $address?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Contact Number:</th>
                    <th class="col-xs-5"><?php echo $contact?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Professional Information:</th>
                    <th class="col-xs-5"><?php echo $professional_info?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Availability:</th>
                    <th class="col-xs-5"><?php echo $availability?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Birth Date:</th>
                    <th class="col-xs-5"><?php echo $b_date?></th>
                </tr>



                </thead>
                </table>
<!--                <button type="button" class="btn btn-warning">Update Info</button>
-->                <!--Table-->
            </div>
        </div>
        <div class="col-sm-6">
            <div class="table-responsive">
                <!--Table-->
                <table class="table table-bordered"">
                <h3>Notice</h3>
                <thead>


                <th class="col-xs-5"> Notice</th>
                <th class="col-xs-2">Published Notice</th>
                </thead>
                <?php
                $query="SELECT * FROM doctor_notice WHERE doctor_email='$doctor_email'";
                $result = $conn->query($query);
                while($row = $result->fetch_assoc()) {
                    $notice=$row["notice"];
                    $date=$row["date"];
                    echo "
                            <tr>
                                 <td>$notice</td>
                                  <td>$date</td>

                            </tr>
                    ";
                }
                ?>
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
            <h3>Post New Notice</h3>
            <form method="post" action="publish_doctor_notice.php">
                <div class="form-group">
                    <textarea class="form-control" name="text_area" rows="5" id="comment"></textarea>
                </div>
                <input type="submit" class="btn btn-info" name="notice_board" id="submit_notice" >
            </form>
        </div>

    </div>
    <hr size="30">
</div>

<section id="team" data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <div class="about-info">
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/team-image1.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Nate Baston</h3>
                        <p>General Principal</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-020-0120</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-linkedin-square"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/team-image2.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Jason Stewart</h3>
                        <p>Pregnancy</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-070-0170</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/team-image3.jpg" class="img-responsive" alt="">

                    <div class="team-info">
                        <h3>Miasha Nakahara</h3>
                        <p>Cardiology</p>
                        <div class="team-contact-info">
                            <p><i class="fa fa-phone"></i> 010-040-0140</p>
                            <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-envelope-o"></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- Doc info + post -->
<!-- Main Body -->
<!-- FOOTER -->
<?php
include 'footer.php';
?>
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
    function search_student() {

        document.search_form.submit();

    }
</script>