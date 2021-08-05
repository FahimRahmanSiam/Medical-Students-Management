<?php
require_once 'header.php';

$student_id=$_SESSION['student_id'];

function resizeImage($resourceType,$image_width,$image_height) {
    $resizeWidth = 200;
    $resizeHeight = 200;
    $imageLayer = imagecreatetruecolor($resizeWidth,$resizeHeight);
    imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$resizeWidth,$resizeHeight, $image_width,$image_height);
    return $imageLayer;
}

if(isset($_POST["pupload"])) {
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
        $sql="UPDATE student SET profile_pic='$loc' WHERE student_id='$student_id'";
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

$student_id=$_SESSION['student_id'];


$query="SELECT * FROM student WHERE student_id='$student_id'";
$result = $conn->query($query);
while($row = $result->fetch_assoc()) {


    $name = $row["name"];
    $email = $row["email"];

    $s_id = $row["student_id"];
    $f_name = $row["father_name"];
    $m_name = $row["mother_name"];
    $b_date = $row["birth_date"];
    $gender = $row["gender"];
    $profile_image=$row["profile_pic"];
    $hall=$row["hall"];
    $weight=$row["weight"];
    $eye_sight=$row["eyesight"];
    $hearing=$row["hearing"];
    $response=$row["response"];
    $height=$row["height"];
    $blood_group=$row["blood_group"];
    $bp=$row["bp"];
    $xray_details=$row["xray_report"];

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
<!--<!-- HEADER -->
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
             <a href="student_profile.php" class="navbar-brand"> <img style="margin-top: -25px" src="images/cuetlogo.png" width="60" height="72" alt=""></a>
            <a href="student_profile.php" class="navbar-brand">Cuet Medical center</a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!--<li><a href="#top" class="smoothScroll" data-toggle="modal" data-target="#modalLRForm">Home</a></li>
                <li><a href="#about" class="smoothScroll" data-toggle="modal" data-target="#modalLRFormDoc">About Us</a></li>
                <li><a href="#team" class="smoothScroll">Doctors</a></li>
                <li><a href="#news" class="smoothScroll">News</a></li>-->
                <li><a href="index.php" class="smoothScroll">Logout</a></li>
                <!--                <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                -->            </ul>
        </div>
    </div>
</section>
<!-- Main Body -->
<div class="container" style="margin-top:20px">
    <div class="row ">
        <div class="img-fluid" alt="Responsive image">
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
                    <input type="submit" name="pupload" id="submit" class="btn btn-success"  style="margin-top:20px" value="Submit">
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
                <h3>Personal information</h3>
                <thead>
                <tr>
                    <th class="col-xs-2">Name:</th>
                    <th class="col-xs-5"><?php echo $name?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Student ID:</th>
                    <th class="col-xs-5"><?php echo $s_id?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Hall Name:</th>
                    <th class="col-xs-5"><?php echo $hall?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Father Name:</th>
                    <th class="col-xs-5"><?php echo $f_name?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Mother's Name:</th>
                    <th class="col-xs-5"><?php echo $m_name?></th>
                </tr>
                <tr>
                    <th class="col-xs-2">Email:</th>
                    <th class="col-xs-5"><?php echo $email?></th>
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
        <div class="table-responsive">
            <!--Table-->
            <table class="table table-bordered"">
            <h3>Student Medical Info</h3>
            <thead>
            <tr>

            <tr>
                <th class="col-xs-2">Weight:</th>
                <th class="col-xs-5"><?php echo $weight;?></th>
            </tr>
            <tr>
                <th class="col-xs-2">Eye Sight:</th>
                <th class="col-xs-5"><?php echo $eye_sight;?></th>
            </tr>
            <tr>
                <th class="col-xs-2">Hearing</th>
                <th class="col-xs-5"><?php echo $hearing;?></th>
            </tr>
            <tr>
                <th class="col-xs-2">Response</th>
                <th class="col-xs-5"><?php echo $response;?></th>
            </tr>
            <tr>
                <th class="col-xs-2">Height</th>
                <th class="col-xs-5"><?php echo $height;?></th>
            </tr>
            <tr>
                <th class="col-xs-2">Blood group</th>
                <th class="col-xs-5"><?php echo $blood_group;?></th>
            </tr>
            <tr>
                <th class="col-xs-2">Blood pressure</th>
                <th class="col-xs-5"><?php echo $bp;?></th>
            </tr>
            <tr>
                <th class="col-xs-2">Xray-details</th>
                <th class="col-xs-5"><?php echo $xray_details;?></th>
            </tr>


            </thead>
            </table>
            <!--Table-->
        </div>
        <div class="col-sm-6">
            <div class="table-responsive">
                <!--Table-->
                <table class="table table-bordered"">
                <h3>Present Report</h3>
                <thead>


                <th class="col-xs-5"> Notice</th>
                <th class="col-xs-2">Published Notice</th>
                </thead>
                <?php
                $query="SELECT * FROM notice_student WHERE student_id='$student_id'";
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
        <div class="col-sm-6">
            <div class="table-responsive">
                <!--Table-->
                <table class="table table-bordered"">
                <h3>Prescription</h3>
                <thead>


                <th class="col-xs-5"> Prescribed by</th>
                <th class="col-xs-2">Prescription </th>
                <th class="col-xs-2">Date </th>
                </thead>
                <?php
                $query="SELECT * FROM prescription WHERE student_id='$student_id'";

                $result = $conn->query($query);
                while($row = $result->fetch_assoc()) {
                    $doc_name=$row["doc_name"];
                    $date=$row["date"];
                    $file=$row["file_location"];
                    echo "
                            <tr>
                                 <td>$doc_name</td>
                                 <td><a href='..$file'>Download</a></td>
                                  <td>$date</td>

                            </tr>
                    ";
                }
                ?>
                </table>
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
            <form method="post" action="publish_notice.php">
                <div class="form-group">
                    <textarea class="form-control" name="text_area" rows="5" id="comment"></textarea>
                </div>
                <input type="submit" class="btn btn-info" name="notice_board" id="submit_notice" >
            </form>
        </div>
		<div class="col-sm-6">
            <div class="table-responsive">
                <!--Table-->
                <table class="table table-bordered"">
                <h3>Doctor's Notice</h3>
                <thead>


                <th class="col-xs-5">Notice</th>
                <th class="col-xs-2">Published Notice</th>
                </thead>
                <?php
                $query="SELECT * FROM doctor_notice ";
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


