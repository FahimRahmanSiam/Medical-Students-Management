<?php
/**
 * Created by PhpStorm.
 * User: Mamun
 * Date: 12/27/2016
 * Time: 4:33 PM
 */


//header('Content-type: application/pdf');
include_once 'dompdf/dompdf_config.inc.php';
include '../header.php';

print_r($_REQUEST);
$doctor_name=$_REQUEST["doctor_name"];
$contact=$_REQUEST["contact"];
$doc_info=$_REQUEST["doc_info"];
$name=$_REQUEST["name"];
$age=$_REQUEST["age"];
$hall_name=$_REQUEST["hall_name"];
$date=$_REQUEST["date"];
$Symtoms=$_REQUEST["Symtoms"];
$disease=$_REQUEST["disease"];
$test=$_REQUEST["test"];
$report_analysis=$_REQUEST["report_analysis"];
$intial_medicine=$_REQUEST["initial_medicine"];
$doctor=$_REQUEST["doctor"];
$student=$_REQUEST["student"];
$next_apoinment=$_REQUEST["next_apoinment"];
$med1=$_REQUEST["med1"];
$med2=$_REQUEST["med2"];
$med3=$_REQUEST["med3"];
$med4=$_REQUEST["med4"];
$med5=$_REQUEST["med5"];
$med6=$_REQUEST["med6"];

$med7=$_REQUEST["med7"];


/*echo $gender;
exit;*/


$html= "<!DOCTYPE html>
<html>
<body>

<h2 style=\" text-align: center\">CUET MEDICAL CENTER</h2>

<table style=\"width:100%\">
  <tr>
    <th style=\"text-align: center\">Logo</th>
   
  </tr>
  
  <tr>
    <th style=\" text-align: center\"></th>
   
  </tr>
  <tr>
    <th>Student info</th>
    <th>Doctor info</th>
    
  </tr>
  <tr>
    <td>
    Name:  ".$name." </br>
    Age: ".$age."</br>
    Hall Name: ".$hall_name."</br>
	Date: ".$date."</br>
    </td>
    <td>
    Name: ".$doctor_name." </br>
    Personal info: ".$doc_info."</br>
    Contact: ".$contact."</br>
    </td>
    
  </tr>
  <tr>
   <th>Diseases Details</th>
   <th>Medicine</th>
  </tr>
  <tr>
   <td>Sysmtopms: ".$Symtoms."</br>
   Probable diseases: ".$disease."</br>
   Suggested test: ".$test."</br>
   Report Analysis: ".$report_analysis."</br>
   Initial medicine: ".$intial_medicine."</br>
   </td>
 <td>
   1. ".$med1."</br>
   2.".$med2."</br>
   3.".$med3."</br>
   4.".$med4."</br>
   5.".$med5."</br>
   6.".$med6."</br>
   7.".$med7."
   </td>
  </tr>
  <tr>
  <td>Next appointment date: ".$next_apoinment."</td>
  </tr>
</table>

</body>
</html>";


 try{
     $gender='xyz';
     echo $gender;
	$folder = $_SERVER['DOCUMENT_ROOT']."/medical/report/";
	if(!file_exists( $folder)){
		mkdir($folder, 0777, true);
	}
	ob_clean();
// create DOMPDF object
	$dompdf = new DOMPDF();
	$dompdf->set_paper("A4", "portrait");
	$dompdf->set_option('enable_html5_parser', true);
	$dompdf->load_html($html);

// create pdf
	$dompdf->render();
	$val_time = strtotime(date("Y-m-d H:i:s"));
	$pdffile = $dompdf->output();
	$file_location = $folder."prescription".$val_time.".pdf";
 echo $file_location;
	file_put_contents($file_location,$pdffile);
	//return $file_location;
	$location= str_replace($_SERVER["DOCUMENT_ROOT"], "", $file_location);
	$sql="INSERT INTO prescription (student_id,doctor_email,file_location,date,doc_name) VALUES ('$student','$doctor','$location','$date','$doctor_name')";
     mysqli_query($conn, $sql);
     echo "<script>alert('Prescription has been sent to the student.')</script>";
     echo "<script> window.location = '../doctor_profile.php' ;</script>";
}catch (Exception $exception){
	echo $exception->getMessage();
}


?>