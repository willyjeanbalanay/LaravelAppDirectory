<?php
	echo"<pre>";
	print_r($_POST);
	echo"</pre>";
	
	$query = mysqli_query($con,"INSERT INTO users_database (userID, keyword, lastName, firstName, cityAdd, countryAdd, contact) VALUES ('$_POST[userID]','$_POST[keyword]','$_POST[lastName]','$_POST[firstName]','$_POST[cityAdd]','$_POST[countryAdd]','$_POST[contact]')") or die(mysql_error());
	if(!$query){
		echo "<br>Alert! Somethings wrong.<br>";
	}
	else{
		echo "<br>User Information successfully added!<br>";
	}
?>
		<br><br>
			<a href="{{ url('welcome') }}"><input type='button' value='DONE'/>
		</a><br>