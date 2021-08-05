<?php

require_once 'header.php';

/*$student_id=$_POST['student_id'];*/

$doctor_email=$_SESSION["doctor_email"];
$student_id=$_POST["student_id"];




if(isset($_POST["student_id"])){

    $student_id=$_POST["student_id"];
    $query="SELECT * FROM student WHERE student_id='$student_id'";

    $login_acc = mysqli_query($conn, $query);
    $row_cnt = mysqli_num_rows($login_acc);
    $result = $conn->query($query);
    if($row_cnt==0){


        echo "<script>alert('No student available with this id')</script>";
        echo "<script>window.open('doctor_profile.php')</script>";
    }
    else{
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
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Health - Medical Website Template</title>
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
            <a href="student_profile_search.php" class="navbar-brand"> <img style="margin-top: -25px" src="images/cuetlogo.png" width="60" height="72" alt=""></a>
            <a href="student_profile_search.php" class="navbar-brand">Cuet Medical center</a>
        </div>
        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="doctor_profile.php" class="smoothScroll" <!--data-toggle="modal" data-target="#modalLRFormDoc"-->Home</a></li>

                <li><a href="prescription.php?email=<?php echo$doctor_email?>&student_id=<?php echo $student_id;?>" class="smoothScroll" <!--data-toggle="modal" data-target="#modalLRForm-->">Prescribe this student</a></li>
                <!--<li><a href="#team" class="smoothScroll">Doctors</a></li>
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
        <div class="">
            <?php
            if($profile_image==''){

                echo "<img src=\"https://via.placeholder.com/200\" class=\"rounded  img-circle\" alt=\"...\"/>";
            }
            else{
                echo "<img src=\"images/student_profile/$profile_image\" class=\"img-thumbnail\" alt=\"...\"/>";
            }
            ?>

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
        <!--<form method="post" action="login.php">-->
            <tr>
                <th class="col-xs-2">Weight:</th>
                <th class="col-xs-5"><input type="text" id="weight" name="weight" value="<?php echo $weight; ?>"></th>
            </tr>
            <tr>
                <th class="col-xs-2">Eye Sight:</th>
                <th class="col-xs-5"><input type="text" id="eye_sight" name="eye_sight" value="<?php echo $eye_sight; ?>"></th>
            </tr>
            <tr>
                <th class="col-xs-2">Hearing</th>
                <th class="col-xs-5"><input type="text"id="hearing" name="hearing" value="<?php echo $hearing; ?>"></th>
            </tr>
            <tr>
                <th class="col-xs-2">Response</th>
                <th class="col-xs-5"><input type="text" id="response" name="response" value="<?php echo $response; ?>"></th>
            </tr>
            <tr>
                <th class="col-xs-2">Height</th>
                <th class="col-xs-5"><input type="text" id="height" name="height" value="<?php echo $height;  ?>"></th>
            </tr>
            <tr>
                <th class="col-xs-2">Blood group</th>
                <th class="col-xs-5"><input type="text" id="blood_group" name="blood_group" value="<?php echo $blood_group;  ?>"></th>
            </tr>
            <tr>
                <th class="col-xs-2">Blood pressure</th>
                <th class="col-xs-5"><input type="text" id="bp"name="bp" value="<?php echo $bp;?>"></th>
            </tr>
            <tr>
                <th class="col-xs-2">Xray-details</th>
                <th class="col-xs-5"><input type="text" id="xray_details" name="xray_details" value="<?php echo $xray_details;  ?>"></th>
            </tr>
            <tr>

                <th>
                    <input type="text" name="student_id" id="student" hidden value="<?php echo $student_id?>">
                    <input type="submit" name="info" value="Update info" onclick="update_info()"></th> </tr>
         <!--   </form>-->
            </thead>
            </table>
            <!--Table-->
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
    </div>
    <hr size="30">
</div>
<!-- Doc info + post -->

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
    function update_info() {

        var weight = $("#weight").val();
        var eye_sight = $("#eye_sight").val();
        var hearing = $("#hearing").val();
        var response = $("#response").val();
        var height = $("#height").val();
        var blood_group = $("#blood_group").val();
        var bp = $("#bp").val();
        var xray_details = $("#xray_details").val();
        var student_id = $("#student").val();
        alert("Information has been updated")

        $.ajax({
            type: "POST",
            url: "information_update.php",
            data: {
                weight: weight,
                eye_sight: eye_sight,
                hearing: hearing,
                response: response,
                height: height,
                blood_group: blood_group,
                bp: bp,
                xray_details: xray_details,
                student_id:student_id

            },
            success: function (response) {

                // you will get response from your php page (what you echo or print)

            }
        })
    }
</script>
