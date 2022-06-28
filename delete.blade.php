<?php
//delete.php

include("./SQLConnect.php");
// $query = mysql_query("DELETE FROM users_database WHERE userID = '".$_GET['id']."'") or die(mysql_error());
$query = mysqli_query($con,"Update users_database SET userStatus='Deleted' WHERE userID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "<br>User Record was not deleted!<br>";
}
else{
	echo"<br>User Record successfully deleted!<br>";
}

echo "<br><br><a href='../delete_record.php'><input type='button' value='Back'/></a>";
?>