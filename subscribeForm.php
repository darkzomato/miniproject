<?php 
session_start();
include('includes/config.php');


  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $pass = $_REQUEST['password'];
  $address = $_REQUEST['address'];
  $phno = $_REQUEST['phone'];

$q = "select * from tblsub where EmailId = '$email' ";
 $res = mysqli_query($con,$q);
 $n = mysqli_num_rows($res);

 if($n != 0){
    $msg="email already exist";
    header('location:subscribers.php?msg='.$msg);

 }
else{
$query=mysqli_query($con,"insert into tblsub(Name,EmailId,pswd,Address,Phone) values('$name','$email','$pass','$address','$phno')");
if($query)
{



 $to = "$email";
 $subject = "subscription added";
 $message = "thank you for subscribing $name your password is $pass";
 $headers = "From:darshanm.1si17cs029@gmail.com";

 if(mail($to,$subject,$message,$headers)){

    $msg="Subscription Added mail send check mail";
	header('location:subscribers.php?msg='.$msg);
 }
 else{
      $msg="Subscription Added fail to send";
	header('location:subscribers.php?msg='.$msg);
 }
  	

	



}
else{
$msg="Something went wrong . Please try again.";   
header('location:subscribers.php?msg='.$msg); 
} 

}


  
?>

