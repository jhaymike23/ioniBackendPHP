<?php
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; application/x-www-form-urlencoded; charset=UTF-8");

  header("Access-Control-Allow-Credentials:true");
  header("Access-Control-Allow-Headers:Access-Control-Allow-Headers, Authorization, Content-type, Accept, Origin, 	X-Requested-With");
  header("Access-Control-Allow-Methods:GET, POST, OPTIONS");
  include('config.ini.php');


  $contentdata  = file_get_contents("php://input");
  $getcourse = json_decode($contentdata);

  $scannedcourse = $getcourse->scannedcode;

  $data = new stdClass();
  $data ->status = 0;
  $data ->data = null;

  $sql = "SELECT * FROM courses WHERE course_code = '$scannedcourse' ";
  $result = mysqli_query($con,$sql);
  $numrow = mysqli_num_rows($result);
  
  if($numrow == 0){

      $data->status = 1;
      $data->data = "The scanned QR code is invalid";
  }

  echo json_encode($data);
   
?>