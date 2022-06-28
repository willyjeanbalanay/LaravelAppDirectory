<?php
	
?>	 
<?php include("./templates/header.php");?>	
<?php include("./templates/sidebar.php");?>	
	<div id="main-container">
		<?php echo "Click for your choice, and enjoy your visit!";?>
		<ul>
		<a href='./fetch_record.php'><br> View User Record <br><br></a>
		<a href='./delete_record.php'>Delete User Record<br><br></a>
		<a href='./update_record.php'>Update User Record<br><br></a>
		<a href='./index.php'>Log-Out<br></a>
		</ul>
	</div>
<?php include("./templates/footer.php");?>
