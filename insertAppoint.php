<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
if (!empty($name) || !empty($surname) || !empty($email) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From appointment Where email = ? Limit 1";
     $INSERT = "INSERT Into appointment (name, surname, email, phone) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
	 
	 
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $name, $surname, $email, $phone);
      $stmt->execute();
      header('Location: indexSent - Appoint.php');
	   
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>