<?php

include_once('database/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$age = $_POST['age'];



	$sql = "INSERT INTO students VALUES(NULL, $name, $roll, $reg, $age)";
	$result = $database->query($sql);

	// if ( $result) {
	// 	echo "This Name = Successfully";
	//   } else{

	// 	echo "Unsuccessfull";
	//   }
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Students </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">




	<div class="row clearfix">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h1> Add new student </h1>
            <a href="index.php" class="btn btn-primary">Student List Page</a>
			
			<form method="POST" action="store.php">
			  
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" name="name" placeholder="Enter Name">
			  </div>

			  <div class="form-group">
			    <label for="roll">Roll</label>
			    <input type="number" class="form-control" name="roll" placeholder="Enter Roll">
			  </div>

			  <div class="form-group">
			    <label for="roll">Reg</label>
			    <input type="number" class="form-control" name="reg" placeholder="Enter reg">
			  </div>

			  <div class="form-group">
			    <label for="roll">Date of Birth</label>
			    <input type="date" class="form-control" name="age" placeholder="Enter Date of Birth">
			  </div>

			  <button type="submit" name='submit' class="btn btn-primary">Submit</button>
			</form>


		</div>
	</div>
</div>
	
</body>
</html>