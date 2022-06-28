<?php?>

<center><table border="5" width="70%">
<tr><td width="70%">
	<?php 
		echo "<br><a1><p align=center>  <<< USER REGISTRATION FORM >>>  </p></a1>";
		echo "<a4><p align=center> ***Fill up the form, to be a registered user!*** </p></a4>";
	?>
	<form action="{{ url('register') }}" method="post">	
		{{ csrf_field() }}
        <table align="center" bg color=yellowgreen; style="padding-top:30px;">
		<tr>
			<td><input type ="text" name="userID" placeholder="User ID"></td>
		</tr><tr>
			<td><input type ="text" name="keyword" placeholder="Keyword"></td>
		</tr><tr>
			<td><input type ="text" name="firstName" placeholder="First Name"></td>
		</tr><tr>
			<td><input type ="text" name="lastName" placeholder="Last Name"></td>
		</tr><tr>
			<td><input type ="text" name="cityAdd" placeholder="City Address"></td>
		</tr><tr>
			<td><input type ="text" name="countryAdd" placeholder="Country Address"></td>
		</tr><tr>
			<td><input type ="text" name="contact" placeholder="Contact Number"></td>
		</tr><tr>
		<br><p align=center>
			<td><a href="{{ url('register') }}"><input type ="submit" name="btn_register" value="Register +"/></td>
		</a></p><br>
		</tr>
		</table>
</center>
	</form>
	