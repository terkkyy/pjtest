<?php
include('condb.php');

//รับค่าไอดีที่จะแก้ไข
$ID= mysqli_real_escape_string($con,$_GET['ID']);
 
// query ข้อมูลจากตาราง: 
$sql = "SELECT * FROM employee WHERE ID='ID' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="style.css">
    <style>p.indent{ padding-left: 1.8em }</style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    
  
    

    
</head>

<h2>EDIT EMPLOYEE</h2>

<div class="container-fluid"> 
<form action="editupdateEmp.php" method="post" name="updateuser" id="updateuser" enctype="multipart/form-data">
  <table>
    <tr>
          <tr>
              <td>ID</td>
              <td><label for="ID"></label>
              <input type="text" name="ID" id="ID" value="<?php echo $_GET['ID'] ?>"  /></td>
          </tr>
          <tr>
              <td>Firstname</td>
              <td><label for="firstname"></label>
              <input type="text" name="firstname" id="firstname" value="<?php echo $objResult["firstname"];?>"></td>
          </tr>
          <tr>
              <td>Lastname</td>
              <td><input type="text" name="lastname" id="lastname" /></td>
          </tr>
          <tr>
              <td>Gender</td>
              <td>
                <select name="gender" id="gender">
                    <option value="Man">Man</option>
                    <option value="Woman">Woman</option>
                </select>
            </td>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td><input type="button" value="ยกเลิก" onclick="window.location='Employee.php' " />
              <input type="reset" value="Clear"/>
              <input type="submit" name="Update" id="Update" value="Update" /></>
          </tr>
    </tr>
  
  </table>
</form>
</div>