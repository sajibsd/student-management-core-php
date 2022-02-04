
<?php include_once 'database/connection.php';?>
<?php include_once 'queries/student.php';?>
<?php
    if(isset($_GET['id'])){

        $result = $database->query(deleteStudentQuery($_GET['id']));
  
        if($result){ 
            $_SESSION['message'] = "Successfully deleted student info";
            echo $_GET['id'] . ' deleted successfully';
            header('Location: index.php');
        } else {
            echo "FAILED TO DELETE";
        }
      } else {
          echo "<h2>Sorry, we cannot perform your action</h2>";
      }


