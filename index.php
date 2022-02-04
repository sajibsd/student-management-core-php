<?php include_once 'database/connection.php';?>
<?php include_once 'queries/student.php';?>
<?php

	$result = $database->query(getAllStudentSql('latest'));
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
 			<div class="col-md-2">

 			</div>
 			<div class="col-md-8">

 				<h1> Student list </h1>

 				<a href="insert.php" class="btn btn-primary"> Add Student </a>
 				<br><br>
 				<table class="table table-bordered table-sm">
 					<thead>
 						<tr>
 							<th>ID</th>
 							<th>Name</th>
 							<th>Roll</th>
 							<th>Reg</th>
 							<th>Date of Birth</th>
 							<th>Action</th>
 						</tr>
 					</thead>
 					<tbody>

 						<?php while ($row = $result->fetch_assoc()) { ?>
 							<tr>
 								<td><?php echo $row['Id']; ?></td>
 								<td><?php echo $row['Name']; ?></td>
 								<td><?php echo $row['Roll']; ?></td>
 								<td><?php echo $row['Reg']; ?></td>
 								<td><?php echo $row['Age']; ?></td>
 							</tr>
 						<?php } ?>

 					</tbody>


 				</table>


 			</div>
 		</div>
 	</div>

 </body>

 </html>