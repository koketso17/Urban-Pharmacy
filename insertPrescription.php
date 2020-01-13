<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$stName_No = $_POST['stName_No'];
$city = $_POST['city'];
$psCode = $_POST['psCode'];
$formOfPayment = $_POST['formOfPayment'];
$Delivery (Not around PTA) = $_POST['Delivery (Not around PTA)'];
if (!empty($name) || !empty($surname) || !empty($email) || !empty($phone) || !empty($stName_No)|| !empty($city)|| !empty($psCode)|| !empty($formOfPayment)|| !empty($Delivery (Not around PTA))) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From prescription Where email = ? Limit 1";
     $INSERT = "INSERT Into prescription (name, surname, email, phone, stName_No, city, psCode, formOfPayment, Delivery (Not around PTA)) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
	 
	 
	 if($Delivery (Not around PTA) == "no"){
		 	$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssssss", $name, $surname, $email, $phone, $stName_No, $city, $psCode, $formOfPayment, $Delivery (Not around PTA));
			$stmt->execute();
			
			header('Location: upload document.php');
		 
	 }
	 else{
		 	$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sssssssss", $name, $surname, $email, $phone, $stName_No, $city, $psCode, $formOfPayment, $Delivery (Not around PTA));
			$stmt->execute();
			
			header('Location: upload document.php');
		 
	 }  
	
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>