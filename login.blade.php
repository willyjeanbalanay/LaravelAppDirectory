<?php 

$query = mysqli_query($con,"SELECT userID, keyword FROM users_database WHERE userID='".$_POST['userID']."'") or die(mysql_error());;

if($query)
{
	while($row = mysqli_fetch_array($query))
	{		
		if($row['keyword'] == $_POST['keyword'])
		{	
			echo "<br><br><br>Congrats! LOG-IN SUCCESSFUL.";
			header("Location:home-page.php");
		}
		else
		{
			echo "<br><br><br>You entered the WRONG KEYWORD!";	
			header("Location:index.php");
		}
	}
}

?>