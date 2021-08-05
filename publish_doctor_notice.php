<?php
require_once 'header.php';
$doctor_email=$_SESSION['doctor_email'];
if(isset($_POST["notice_board"])){

    $date=date(DATE_RFC822);
    $notice_value=$_POST["text_area"];
    $query="INSERT INTO doctor_notice(doctor_email,notice,date) VALUES ('$doctor_email','$notice_value','$date')";
    mysqli_query($conn, $query);
    echo "<script>alert('Notice has been successfully published')</script>";
    
    echo "<script>window.open('doctor_profile.php')</script>";
}

?>