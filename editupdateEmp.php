<meta charset="UTF-8">
<?php

include('condb.php');  

if($_POST["ID"]==''){
echo "<script type='text/javascript'>"; 
echo "alert('Error Contact Admin !!');"; 
echo "window.location = 'employee.php'; "; 
echo "</script>";
}



	$ID= $_POST["ID"];
	$firstname= $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$gender= $_POST["gender"];


  $sql = " UPDATE employee SET  
        firstname='$firstname' ,
        lastname ='$lastname ' , 
			  gender ='$gender' 
			  WHERE ID='$ID' ";
            
			echo $sql;
			$result = mysqli_query($con, $sql) or die ("Error in query: $sql" . mysqli_error());
			
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