<?php
$filename = $_POST['filename'];
if(isset($_POST['Submit1'])){ $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); $name = $_POST["filename"]; move_uploaded_file($_FILES["file"]["tmp_name"], $name.".".$extension);}

if (!empty($filename)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT filename From uploadedfiles Where filename = ? Limit 1";
     $INSERT = "INSERT Into uploadedfiles (filename) values(?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $filename);
     $stmt->execute();
     $stmt->bind_result($filename);
     $stmt->store_result();
	 
	 
		 	$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("s", $filename);
			$stmt->execute();
			header('Location: indexSent - Presc - Copy.php');
			
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>