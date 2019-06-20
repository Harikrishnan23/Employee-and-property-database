

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$pnu=$_GET['pnu'];
		$street=$_GET['street'];
		$area=$_GET['area'];
		$city=$_GET['city'];
		$pcode=$_GET['pcode'];
		$type=$_GET['type'];
		$rooms=$_GET['rooms'];
		$rent=$_GET['rent'];
		$ono=$_GET['ono'];
		$sno=$_GET['sno'];
		$bno=$_GET['bno'];
		$db_name="msccs2019_hkt1";
		$sql_text="INSERT INTO `property_for_rent` (`Pno`, `Street`, `Area`, `City`, `Pcode`, `Type`, `Rooms`, `Rent`, `Ono`, `Sno`, `Bno`)
		VALUES ('$pnu', '$street', '$area', '$city', '$pcode', '$type', '$rooms', '$rent', '$ono', '$sno', '$bno')";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");

		if (!mysqli_query($conn_id,$sql_text))
			print ( 'VALUES Not INSERTED');
		else
			print ('VALUES INSERTED');


	?>
</body>
</html>
