<?php
//updated.php
//Update user record to users_table table in php_mysql database.
	include("./SQLConnect.php");
	echo"<pre>";
	print_r($_POST);
	echo"</pre>";

    $query = mysqli_query($con,"Update users_database SET userStatus='Updated' WHERE userID ='".$_GET['id']."'") or die(mysqli_error());
    
    if(!$query){
		echo "<br>Alert! Somethings wrong.<br>";
	}
	else{
		echo "<br>User Information successfully Updated!<br>";
	}
	
    echo "<br><br><a href='./update_record.php'><input type='button' value='DONE'/></a>";
?>