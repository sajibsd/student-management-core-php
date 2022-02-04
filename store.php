<?php include_once 'database/connection.php';?>
<?php include_once 'queries/student.php';?>
<?php
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$age = $_POST['age'];
	$sql = createStudentQuery($name,$roll,$reg,$age);
	$result = $database->query($sql);
  

	if($result){ 
		$_SESSION['message']= "Successfully inserted student info";
		header('Location: index.php');
	} else {
		echo "FAILED TO INSERT";
	}


?>