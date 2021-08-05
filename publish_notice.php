<?php
require_once 'header.php';
$student_id=$_SESSION['student_id'];
if(isset($_POST["notice_board"])){

    $date=date(DATE_RFC822);
    $notice_value=$_POST["text_area"];
    $query="INSERT INTO notice_student(student_id,notice,date) VALUES ('$student_id','$notice_value','$date')";
    mysqli_query($conn, $query);
    echo "<script>alert('Notice has been successfully published')</script>";
    echo "<script>window.open('Student_profile.php')</script>";
}

?>