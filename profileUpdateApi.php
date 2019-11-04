<?php
	header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; application/x-www-form-urlencoded; charset=UTF-8");

    header("Access-Control-Allow-Credentials:true");
    header("Access-Control-Allow-Headers:Access-Control-Allow-Headers, Authorization, Content-type, Accept, Origin, X-Requested-With");
    header("Access-Control-Allow-Methods:GET, POST, OPTIONS");
    include('config.ini.php');

    $contentdata  = file_get_contents("php://input");
    $updatedata = json_decode($contentdata);

    $mobile = $updatedata->mobile;
    $address = $updatedata->address;
    $id = $updatedata->id;

    $data = new stdClass();
    $data->status = 0;
    $data->data = null;
    $message = false;
	$sql = " UPDATE  member SET mem_mobnumber ='$mobile', mem_address ='$address' WHERE mem_id  = $id ";
	if($con->query($sql) === TRUE){
		$message = true;
		$data->status = 1;
		$data->data = "Updated successfully";    		
	}
	else{
		$message = false;
		$data->status = 0;
		$data->data = "something went wrong". mysqli_error($con);
	}
	 echo json_encode($data);
	
?>