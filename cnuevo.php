<?php
include_once 'otros/dbconfig.php';

if(isset($_POST['btn-save']))
{
	// variables for input data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO clientes(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
	// sql query for inserting data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Inserted Successfully ');
		window.location.href='clistado.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while inserting your data');
		</script>
		<?php
	}
	// sql query execution function
}
?>
<html>
	<head>
		<title>.: PHP + AZURE - Nuevo Cliente :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
<body>
<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Nuevo Cliente</h2>

<form role="form" method="post">
 <div class="form-group">
		    <label for="first_name">Nombre:</label>
		    <input type="text" name="first_name" placeholder="First Name" required />
		  </div>

  <div class="form-group">
		    <label for="last_name">Apellido:</label>
		    <input type="text" name="last_name" placeholder="Last Name" required />
		  </div>

  <div class="form-group">
		    <label for="city">Cuidad:</label>
		  <input type="text" name="city_name" placeholder="City" required />
		  </div>



<button type="submit" name="btn-save" class="btn btn-default"><strong>GUARDAR</strong></button>

 <table align="center">
    <tr>
    <td align="center"><a href="home.php">back to main page</a></td>
	</table>

		</form>


</div>
</div>
</div>
	</body>
</html>
