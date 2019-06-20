
<html>
<head><h1>Staff information</h1>
</head>
<?php
	require_once"database_connect.php";
	$conn_id=conection();
	$db_name="msccs2019_hkt1";
	$query="select Bno from branch order by Bno";
	mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");
	$result_list=mysqli_query($conn_id,$query)
			or exit("Could not execute the query");


?>

<div>
	<form name= "Branchlist" method="get" action="staff_d.php">
	Branch identifier:
	<select name="branchnum">
	<?php
	while($row1=mysqli_fetch_array($result_list)):;?>
	<option><?php echo $row1[0];?></option>
	<?php endwhile;?>


	</select>
	<br>
	<input type="submit" name="submit" value="submit">

	</form>
	</div>





</body>
</html>
