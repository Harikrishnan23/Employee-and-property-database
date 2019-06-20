

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$sno=$_GET['sno'];
		$Fname=$_GET['Fname'];
		$Lname=$_GET['Lname'];
		$Address=$_GET['Address'];
		$Tel_No=$_GET['Tel_No'];
		$Position=$_GET['Position'];
		$Sex=$_GET['Sex'];
		$DOB=$_GET['DOB'];
		$Salary=$_GET['Salary'];
		$NIN=$_GET['NIN'];
		$Bno=$_GET['Bno'];
		$db_name="msccs2019_hkt1";
		$sql_text="INSERT INTO `staff` (`Sno`, `FName`, `LName`, `Address`, `Tel_No`, `Position`, `Sex`, `DOB`, `Salary`, `NIN`, `Bno`)
		VALUES ('$sno', '$Fname', '$Lname', '$Address', '$Tel_No', '$Position', '$Sex', '$DOB', '$Salary', '$NIN', '$Bno')";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");

		if (!mysqli_query($conn_id,$sql_text))
			print ( 'VALUES Not INSERTED');
		else
			print ('VALUES INSERTED');


	?>
</body>
</html>
