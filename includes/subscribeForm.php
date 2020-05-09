<?php 
session_start();
include('includes/config.php');

    ?>
<?php 
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $address = $_REQUEST['address'];
  $phno = $_REQUEST['phone'];

  $query=mysqli_query($con,"insert into tblsub(Name,EmailId,Address,Phone) values('$name','$email','$address','$phno')");
if($query)
{

$msg="Subscription Added";
header('location:subscribers.php?msg='.$msg);

}
else{
$msg="Something went wrong . Please try again.";   
header('location:subscribers.php?msg='.$msg); 
} 
?>