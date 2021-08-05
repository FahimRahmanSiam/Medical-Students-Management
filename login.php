<?php
error_reporting(0);

 require_once 'header.php';

if (isset($_POST["register"])) {

    $s_id = $_POST["s_id"];
    $query = "SELECT * FROM `student` WHERE `student_id`='$s_id'";

    $login_acc = mysqli_query($conn, $query);
    $row_cnt = mysqli_num_rows($login_acc);

    if( $row_cnt==0){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $s_id = $_POST["s_id"];
        $f_name = $_POST["f_name"];
        $m_name = $_POST["m_name"];
        $b_date = $_POST["b_date"];
        $gender = $_POST["gender"];
        $hall=$_POST["hall"];
        /*$height = $_POST["height"];
        $weight = $_POST["weight"];
        $address = $_POST["address"];
        $dob = $_POST["bday"];
        $blood_group = $_POST["blood_group"];
        $gender = $_POST["gender"];*/


        $sql_query = "INSERT INTO student (name, student_id, father_name, mother_name, email, birth_date, gender, password,hall)
					VALUES ('$name','$s_id','$f_name','$m_name','$email', '$b_date', '$gender', '$password','$hall')";

        if (mysqli_query($conn, $sql_query)) {

            $_SESSION["student_id"]=$s_id;


            echo "<script>alert('Registration Completed. Please login to continue.')</script>";
            //echo "<script>window.open('index.php')</script>";
			echo "<script> window.location = 'index.php' ;</script>";
        } else {
            echo "<script>alert('Data could not be inserted. Please try again.')</script>";
        }
    }

    else{

        echo "<script>alert('This id has already been registered')</script>";
        echo "<script> window.location = 'index.php' ;</script>";
    }


}



else if (isset($_POST["login"])) {


    $email = $_POST["email"];
    $s_id = $_POST["s_id"];
    $password = $_POST["password"];


    $sql_query = "SELECT email,student_id, password FROM student WHERE email = '$email' AND password = '$password' AND student_id='$s_id'";

    $login_acc = mysqli_query($conn, $sql_query);
    $check = mysqli_num_rows($login_acc);



    if ($check == 0) {
       echo "<script>alert('Incorrect combination. Please try again.')</script>";
        echo "<script> window.location = 'index.php' ;</script>";
    } else {



        $query = "SELECT * FROM student WHERE email = '$email' ";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()) {

            $_SESSION["student_id"] = $row["student_id"];



        }
       echo "<script>alert('Login successful.')</script>";
        echo "<script> window.location = 'Student_profile.php' ;</script>";
    }

}
else if (isset($_POST["register_doctor"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $contact_number=$_POST["contact_number"];
    $blood_group = $_POST["blood_group"];
    $p_info = $_POST["p_info"];
    $b_date = $_POST["b_date"];
    $gender = $_POST["gender"];

    /*$height = $_POST["height"];
    $weight = $_POST["weight"];
    $address = $_POST["address"];
    $dob = $_POST["bday"];
    $blood_group = $_POST["blood_group"];
    $gender = $_POST["gender"];*/


    $sql_query2 = "INSERT INTO doctor (user_name, address, contact, blood_group,professional_info, email, birth_date, gender, password)
					VALUES ('$name','$address','$contact_number','$blood_group','$p_info','$email', '$b_date', '$gender', '$password')";


    if (mysqli_query($conn, $sql_query2)) {
        $_SESSION['doctor_email'] = $row["email"];
        echo "<script>alert('Registration Completed. Please login to continue.')</script>";

        //echo "<script>window.open('doctor_profile.php','self')</script>";
        echo "<script> window.location = 'index.php' ;</script>";
    } else {
        echo "<script>alert('Data could not be inserted. Please try again.')</script>";
		echo "<script> window.location = 'index.php' ;</script>";
    }
}
else if (isset($_POST["login_doc"])) {

    $email = $_POST["email"];

    $password = $_POST["password"];


    $sql_query4 = "SELECT email, password FROM doctor WHERE email = '$email' AND password = '$password'";

    $login_acc = mysqli_query($conn, $sql_query4);
    $check = mysqli_num_rows($login_acc);


    if ($check == 0) {
        echo "<script>alert('Incorrect combination. Please try again.')</script>";
        echo "<script>window.open('index.php')</script>";
    } else {

        $_SESSION["doctor_email"] = $email;


        $query = "SELECT * FROM doctor WHERE email = '$email' ";
        $result = $conn->query($query);
        while($row = $result->fetch_assoc()) {
            $_SESSION['doctor_email'] = $row["email"];


        }
        echo "<script>alert('Login successful.')</script>";
        echo "<script> window.location = 'doctor_profile.php' ;</script>";
    }

}
else if(isset($_POST["availability"])) {
    $availability_time = $_POST["available_time"];
    $email = $_POST["email_avail"];
    $query2 = "UPDATE doctor SET availability='$availability_time' WHERE email='$email'";
    $result = $conn->query($query2);

    echo "<script>alert('Your schedule has been set.')</script>";
    echo "<script> window.location = 'doctor_profile.php' ;</script>";

}
else if(isset($_POST["info"])) {
   $student_id=$_POST["student_id"];
   $weight=$_POST["weight"];
   $eye_sight=$_POST["eye_sight"];
   $hearing=$_POST["hearing"];
   $response=$_POST["response"];
   $height=$_POST["height"];
   $blood_group=$_POST["blood_group"];
    $bp=$_POST["bp"];
   $xray_details=$_POST["xray_details"];
   $query="UPDATE student SET weight='$weight',eyesight='$eye_sight',hearing='$hearing',response='$response',height='$height',blood_group='$blood_group',bp='$bp',xray_report='$xray_details' WHERE student_id='$student_id'";
    $result = $conn->query($query);

    echo "<script>alert('Information has been updated.')</script>";
    echo "<script> window.location = 'student_profile_search.php' ;</script>";
}
    ?>