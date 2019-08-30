<?php  
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  header("Access-Control-Allow-Methods: GET");

  include('config.ini.php');


  $contentdata  = file_get_contents("php://input");
  $getdata = json_decode($contentdata);

  $user =   $getdata->user; 
  $pass = $getdata->pass;

  // should crete something like this
  $data = new stdClass();
  $data->status = 0;
  $data->data = null;


  $sql = "SELECT * FROM member WHERE mem_use = '$user' AND mem_pass = '$pass' ";
  $result = mysqli_query($con,$sql);

  $numrow = mysqli_num_rows($result);
  
  if($numrow == 1){

        $arr = array();

        while($row = mysqli_fetch_assoc($result)){
          $arr[] = $row;
        }
   
      $data->status = 1;
      $data->data = $arr;
  }

  echo json_encode($data);
   
?>