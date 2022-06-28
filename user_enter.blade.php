<?php?>

<center><table border="5" width="70%">
<tr><td width="70%">
<?php
    echo "<br><a1><p align=center>   [[[ USER LOG-IN ]]]   </p>";
    echo "<p align=center>  *** Input your log in credentials, to authenticate your records. *** </p>";
    ?>
	<form method="HEAD" action="">
        <table align="center" style="padding-top:30px;">
            <tr><td>User ID:</td><td><input type="text" name="userID"></td></tr>
            <tr><td>Keyword:</td><td><input type="text" name="keyword"></td></tr>
            <tr><td><a href="{{ url('login') }}"><input type="submit" name="btn_login" value="Enter ="></td></tr>
        </table>
</center>
	</form>