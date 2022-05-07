<?php session_start(); 


// Create connection
$connect = new mysqli('localhost', 'root', '', 'test_terk');

// Check Connection
if ($connect->connect_error) {
    die("Something wrong.: " . $connect->connect_error);
  }

$result = mysqli_query($connect,"SELECT * FROM employee");
$sql = "DELETE FROM employee WHERE ID ='" . $_GET["ID"] . "'";

if ($connect->query($sql) === TRUE) {
   header("Location: employee.php");  
  } else {
    echo "Error deleting record: " . $connect->error;
  }
  

?>