<?php
include 'connection.php';
$username = $_POST["username"];
$rollnumber = $_POST['rollnumber'];
$sql = "select *from login where rollnumber = '$rollnumber'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count != 0) {
    echo "user exist";
} else {
    $mysql = "INSERT INTO login (username,rollnumber) VALUES ('$username','$rollnumber')";
    $res = mysqli_query($conn, $mysql);
    if (mysqli_error($conn)) {
        echo "error";
    } else {
        header('Location: ../teacherchoice.html');
    }
}