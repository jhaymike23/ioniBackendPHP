<?php
	  header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    header("Access-Control-Allow-Credentials:false");
    header("Access-Control-Allow-Headers:authorization, content-type, accept, origin");
    header("Access-Control-Allow-Methods:GET, POST, OPTIONS");

   include('config.ini.php');

   $contentdata  = file_get_contents("php://input");
   $getdata = json_decode($contentdata);

   
   $getmemberId =   $getdata->memberId; 
   $data = new stdClass();
   $data->status = 0;
   $data->data = null;  

   $sql = "SELECT * FROM history WHERE mem_id = '$getmemberId'";
   $result = mysqli_query($con,$sql);

   $numrow = mysqli_num_rows($result);
  
   if($numrow > 0){

        $arr = array();

        while($row = mysqli_fetch_assoc($result)){
          $arr[] = $row;
        }
   
      $data->status = 1;
      $data->data = $arr;
   }

   echo json_encode($data);
?>