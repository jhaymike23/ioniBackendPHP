<?php  
    header("Access-Control-Allow-Origin: *");
	  header("Content-Type: application/json; charset=UTF-8");

   include('config.ini.php');


   $contentdata  = file_get_contents("php://input");
   $getdata = json_decode($contentdata);

   
   $getsearch =   $getdata->searchSched; 
  // $pass = $getdata->pass;  


   $sql = "SELECT * FROM schedule WHERE sched_code = $getsearch ";
   $result = mysqli_query($con,$sql);

   $numrow = mysqli_num_rows($result);
  
  if($numrow > 0){
       $arr = array();
       while($row = mysqli_fetch_assoc($result)){
         $arr[] = $row;
       }
   
      echo json_encode($arr);
      mysqli_close($con);
  }else{
      echo json_encode(null);
  }
  
   
?>