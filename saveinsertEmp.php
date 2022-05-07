<mate charset ="utf-8" />

<?php include ('condb.php'); 

	
$ID= $_POST["ID"];
$firstname= $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender= $_POST["gender"];

    
	
	$sql = " INSERT INTO employee
	(ID, firstname, lastname, gender)
	VALUES
	('$ID', '$firstname', '$lastname', '$gender' )";
	
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	
	mysqli_close($con);
			
			
				
				
  if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Update Succesfuly');";
    echo "window.location = 'employee.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
      echo "window.location = 'employee.php'; ";
    echo "</script>";
  }
  
  
  ?>