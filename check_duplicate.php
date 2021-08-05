<?php

include "header.php";
$student_id=$_REQUEST['student_id'];
$query = "SELECT * FROM `student` WHERE `student_id`='$student_id'";

$login_acc = mysqli_query($conn, $query);
$row_cnt = mysqli_num_rows($login_acc);

if( $row_cnt==0){
    echo 1;
}

else{
    echo 0;
}
?>