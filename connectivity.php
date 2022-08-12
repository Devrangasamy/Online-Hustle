<?php

$name = $_POST['name'];
$email  = $_POST['email'];
$phoneno = $_POST['phoneno'];
$feedback = $_POST['feedback'];




if (!empty($name) || !empty($email) || !empty($phoneno) || !empty($feedback) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "feedbackdb";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From feedback Where email = ? Limit 1";
  $INSERT = "INSERT Into feedback (name , email ,phoneno, feedback )values(?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $name,$email,$phoneno,$feedback);
      $stmt->execute();

      function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
    
        exit();
    }
    Redirect('index.php', false);
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>