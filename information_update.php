<?php
include 'header.php';
$student_id=$_REQUEST["student_id"];
$weight=$_REQUEST["weight"];
$eye_sight=$_REQUEST["eye_sight"];
$hearing=$_REQUEST["hearing"];
$response=$_REQUEST["response"];
$height=$_REQUEST["height"];
$blood_group=$_REQUEST["blood_group"];
$bp=$_REQUEST["bp"];
$xray_details=$_REQUEST["xray_details"];
$query="UPDATE student SET weight='$weight',eyesight='$eye_sight',hearing='$hearing',response='$response',height='$height',blood_group='$blood_group',bp='$bp',xray_report='$xray_details' WHERE student_id='$student_id'";
$result = $conn->query($query);
?>