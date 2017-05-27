<?php
include_once 'otros/dbconfig.php';

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM clientes WHERE user_id=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$city_name = $_POST['city_name'];
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE clientes SET first_name='$first_name',last_name='$last_name',user_city='$city_name' WHERE user_id=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='clistado.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: clistado.php");
}
?>
<html>
	<head>
		<title>.: PHP + AZURE - Editar Cliente :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Editar Cliente</h2>



    <form role="form" method="post">
 <div class="form-group">
		    <label for="first_name">Nombre:</label>
		    <input type="text" name="first_name" placeholder="First Name" value="<?php echo $fetched_row['first_name']; ?>" required />
		  </div>

  <div class="form-group">
		    <label for="last_name">Apellido:</label>
		    <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $fetched_row['last_name']; ?>" required />
		  </div>

  <div class="form-group">
		    <label for="city">Cuidad:</label>
		   <input type="text" name="city_name" placeholder="City" value="<?php echo $fetched_row['user_city']; ?>" required />
		  </div>



    <button type="submit" name="btn-update" class="btn btn-default"><strong>GUARDAR</strong></button>
    <button type="submit" name="btn-cancel" class="btn btn-default"><strong>CANCELAR</strong></button>



		</form>

</div>
</div>
</div>
	</body>
</html>