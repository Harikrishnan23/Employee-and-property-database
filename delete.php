

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$sno=$_GET['sno'];

		$db_name="msccs2019_hkt1";
		$sql_text="delete from staff where Sno='$sno' ";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");

		if (!mysqli_query($conn_id,$sql_text))
			print ( 'Staff inormation is NOT Deleted');
		else
			print ('Staff information is deleted');


	?>
</body>
</html>
