<?php
include("./SQLConnect.php"); ?>

<center><table border="10" width="70%">
<tr><td width="70%">
		<?php
		echo "<br><h2><p align=center>  REGISTERED USER INFORMATION DISPLAYED  </p></h2>";
	
		//Fetch data from table (e.g. users_database)
		//Retrieve
		
		$query = mysqli_query($con, "SELECT * FROM users_database WHERE userStatus = 'Active'") or die(mysqli_error());
		echo "<br><br>";
		
		echo "<p align=center><table border='5' style='border-collapse:collapse;background-color:skyblue; color:black;'>
				<th>User ID</th>
				<th>Keyword</th>
				<th>Last Name</th>
				<th>First Name</th>
				<th>City Address</th>
				<th>Country Address</th>
				<th>Contact Number</th>
			 </p>";
		while($row = mysqli_fetch_array($query)){
			echo "<tr>
					<td>$row[userID]</td>
					<td>*****</td>
					<td>$row[lastName]</td>
					<td>$row[firstName]</td>
					<td>$row[cityAdd]</td>
					<td>$row[countryAdd]</td>
					<td>$row[contact]<br>
				  </tr>";
		}
		echo "</table>";
?>
</center>
<?php  echo "<br><br><p align=center><a href='./home-page.php'><input type='button' value='Back To HomePage'/></a></p><br><br>"; ?>