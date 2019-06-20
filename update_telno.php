

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$sno=$_GET['sno'];
		$Tel_no=$_GET['Tel_No'];

		$db_name="msccs2019_hkt1";
		$sql_text="UPDATE staff set Tel_No='$Tel_no' where Sno='$sno'";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");

		if (!mysqli_query($conn_id,$sql_text))
			print ( 'Staff telephone number is not updated');
		else
			print ('Staff telephone number is updated');


	?>
</body>
</html>
