<?php include 'config/db.php';?>
<?php
	try {
        $database = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
  }
   