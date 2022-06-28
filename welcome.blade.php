<html>
<head>
	<style>
		a{color:#fff;}
		a:hover{background-color:yellow; color:black;}
	</style>
</head>
<body bgcolor="skyblue">

<center><table border="5" width="50%">
<tr><td width="40%">
<?php echo "<br><h2><p align=center font-weight=bold font-size=20%> HELLO! This is WILLY JEAN BALANAY, <br></br>'WELCOME TO MY FINAL PROJECT PROGRAM WITH LARAVEL' </h2></p>";
	  echo "<br><p align=center> |New to this site? Wish to register, click the 'USER REGISTRATION' to proceed.<br><br> ";
	  echo "<br><p align=center> |Already have an existing record? Then click the 'USER LOG-IN' to proceed.<br><br> ";?>

	<br><p align=center>
		<a href="{{ url('user_reg') }}"><input type='button' value='USER REGISTRATION'/>
	  </a></p><br>
	<br><p align=center>
		<a href="{{ url('user_enter') }}"><input type='button' value='USER LOG-IN'/>
	</a></p><br>
</center>
</body>
</html>
