<?php
include_once 'dbconfig.php';

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$details=$_POST["message"];

if (!$db) die("Could not connected " . mysqli_connect_error());
$stmt = "insert into item_us(name,email,subject,details) values('$name','$email','$subject','$details')";
if ($db->query($stmt) === true){
  echo "<script> alert('Your Suggestion Sent Successfully ');window.location.href='contact.php'; </script>";
}
else echo "<script>alert('Something went wrong') </script>" . $db->error;

?>