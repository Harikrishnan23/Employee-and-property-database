

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$sno=$_GET['sno'];
		$address=$_GET['Newaddress'];

		$db_name="msccs2019_hkt1";
		$sql_text="UPDATE staff set Address='$address' where Sno='$sno'";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");

		if (!mysqli_query($conn_id,$sql_text))
			print ( 'Staff address is not updated');
		else
			print ('Staff address is updated');


	?>
</body>
</html>
