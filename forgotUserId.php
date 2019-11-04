<?php
	header("Access-Control-Allow-Origin: *");
  	header("Content-Type: application/json; application/x-www-form-urlencoded; charset=UTF-8");

  	header("Access-Control-Allow-Credentials:true");
  	header("Access-Control-Allow-Headers:Access-Control-Allow-Headers, Authorization, Content-type, Accept, Origin, X-Requested-With");
  	header("Access-Control-Allow-Methods:GET, POST, OPTIONS");
  
  	include('config.ini.php');

  	$contentdata  = file_get_contents("php://input");
  	$getdata = json_decode($contentdata);

  	$userId =   $getdata->userId; 

  	$data = new stdClass();
 	$data->status = 0;
  	$data->data = null;
  	$data->message = null;

  	$sql = "SELECT mem_use FROM member WHERE mem_use = '$userId' ";
  	$result = mysqli_query($con,$sql);

  	$numrow = mysqli_num_rows($result);
  
	  if($numrow == 1){

	        $arr = array();

	        while($row = mysqli_fetch_assoc($result)){
	          $arr[] = $row;
	        }
	   
	      $data->status = 1;
	      $data->data = $arr;
	      $data->message = "Success, User id found";
	  }else{
	  	$data->data = "No user id found";
	  }

  	echo json_encode($data);
?>