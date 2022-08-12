<?php
include 'connection.php';
$name=$_POST['name'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$noofpassengers=$_POST['noofpassengers'];
$querry="insert into booking values('$name','$phoneno','$email','$aadhar','$noofpassengers')";
mysqli_query($conn,$querry);

// $_SESSION()


?>