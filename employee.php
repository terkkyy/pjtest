<?php 

    
    $connect = new mysqli('localhost', 'root', '', 'test_terk');

    
    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM employee";
    $result = $connect->query($sql);
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">-->
    <style type="text/css">
        .form-group{ margin-bottom:0px !important;}
        .form-control-feedback{top:0px !important;}
    </style>
</head>



<body>

<h2>EMPLOYEE</h2>

<div class="container-fluid"> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myPopUp" >INSERT</button>
</div>

<form action="saveinsertEmp.php" method="post" name="form1" id="form1">
<div class="modal fade" id="myPopUp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title">INSERT IN EMPLOYEE</h5>
        <table class="table" width="100%" border="0" cellspacing="3" cellpadding="0">
    
      <tr>
      
      <td width="25%" align="right"> ID </td>
      <td align="left">
       
      <div class="form-group has-feedback" >
          <input class="form-control css-require" name="ID" type="text" id="ID"  />
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
      </div>      
      </td>

    </tr>   
    
    <tr>
      
      <td width="25%" align="right"> Firstname </td>
      <td align="left">
       
      <div class="form-group has-feedback" >
          <input class="form-control css-require" name="firstname" type="text" id="firstname"  />
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
      </div>      
      </td>

    </tr>

    <tr>
      
      <td align="right">Lastname</td>
      <td align="left">
 
      <div class="form-group has-feedback" >
          <input class="form-control css-require" name="lastname" type="text" id="lastname" />
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
      </div>                  
      </td>

    </tr>

    <tr>
      <td align="right">Gender</td>
      <td align="left">
       
    <div class="form-group has-feedback" >     
    <select name="gender" id="gender">
                    <option value="Man">Man</option>
                    <option value="Woman">Woman</option>
                </select>
    </div>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>    
    </td>
    </tr>


    
    <td align="left">
    <div class="form-group has-feedback" >     
    <input type="submit" name="button" id="button" value="Save" >
    </div>    
    </td>	
    
    <td align="left">
    <div class="form-group has-feedback" >    
    <input type="reset" value="Clear"/>
    </div>    
    </td>
    
	                        </table>
                    
                    </form>
				</div>
			</div>
		</div>
	</div>
  </div>
  </body>


<div class="container-fluid"> 
    <table class="table-hover">
                <tr>
                    <td width="5%">ID</td>
                    <td width="5%">FIRSTNAME</td>
                    <td width="5%">LASTNAME</td>
                    <td width="5%">GENDER</td>
                    <td width="5%"></td>
                    <td width="5%"></td>
                </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
               <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a href="delEmp.php? ID=<?php echo $row["ID"]; ?>" >Delete</a></td>
                    <td><a href="editEmp.php? ID=<?php echo $row["ID"];?>" >Edit</a></td>

               </tr>
    </tr>
 <?php endwhile ?>  
</body>
</html>

