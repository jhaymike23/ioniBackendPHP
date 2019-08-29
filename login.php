<?php  
    header("Access-Control-Allow-Origin: *");
	  header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: GET");

    include('config.ini.php');


   $contentdata  = file_get_contents("php://input");
   $getdata = json_decode($contentdata);

   $user =   $getdata->user; 
   $pass = $getdata->pass;
   $error = "Unknown account";
   /*$user =   $_POST['user']; 
   $pass = $_POST['pass'];*/


   $sql = "SELECT * FROM member WHERE mem_use = '$user' AND mem_pass = '$pass' ";
   $result = mysqli_query($con,$sql);

   $numrow = mysqli_num_rows($result);
  
  if($numrow == 1){
       $arr = array();
       while($row = mysqli_fetch_assoc($result)){
         $arr[] = $row;
       }
   
      echo json_encode($arr);
  }else{
      echo json_encode($error);
  }
  
   
?>