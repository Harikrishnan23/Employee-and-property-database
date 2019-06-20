

	<?php

		require_once"database_connect.php";
		$conn_id=conection();

		$staffnum=$_GET['staffnum'];
		$db_name="msccs2019_hkt1";
		$sql_text="select FName,LName from staff where Sno='$staffnum'";

		mysqli_select_db($conn_id,$db_name)
			or exit("Cannot connect the database");
		$result=mysqli_query($conn_id,$sql_text)
			or exit("Could not execute the query");
		print("<table>\n");
		while($row=mysqli_fetch_row($result))
		{
			print("<tr>\n");
			for ($i=0;$i<mysqli_num_fields($result); $i++)
			{
				printf ("<td>%s</td>\n", htmlspecialchars($row[$i]));
			}
			print("</tr>\n");
		}
		print("</table>\n");

		mysqli_free_result($result);
	?>
</body>
</html>
