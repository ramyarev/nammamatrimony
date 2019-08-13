<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


$conn = mysqli_connect("localhost", "nammamatrimony", "D-}pX}!3RhYV",'nammamatrimony'); 

/*$name=$_GET['name'];	
$dob=$_GET['dob'];	
$id=$_GET['id'];	

//$sql = "INSERT INTO tbl_user (name,dob) VALUES ('".$name."','".$dob."')";
$sql = "delete from tbl_user where id='".$id."'";
 $qur = $conn->query($sql);
 
 if($qur){
 $json = array("status" => "true", "msg" => "Registation Done Successfully","status code" => "123");
 }else{
 $json = array("status" => "false", "msg" => "Error adding user!","status code" => "123");
 }
 
 header('Content-type: application/json');
echo json_encode($json);*/
	
?>