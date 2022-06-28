<?php
include("./SQLConnect.php"); ?>

<center><table border="10" width="70%">
<tr><td width="70%">
    <?php 
    echo "<br><h2><p align=center> TERMINATING USER RECORD </p></h2>";
    echo "<br><br>";
    echo "<p align=center><table border='5' style='border-collapse:collapse;background-color:yellowgreen; color:black;'>
            <th>User ID</th>
            <th>Keyword</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>City Address</th>
            <th>Country Address</th>
            <th>Contact Number</th>
            <th>User Level</th>
            <th>Status</th>
            <th>Action</th>
            </p>";
    $query1 = mysqli_query($con, "SELECT * FROM users_database WHERE userStatus = 'Active'") or die(mysqli_error());
    while($row = mysqli_fetch_array($query1)){
        echo "<tr>
                <td>$row[userID]</td>
                <td>*****</td>
                <td>$row[lastName]</td>
                <td>$row[firstName]</td>
                <td>$row[cityAdd]</td>
                <td>$row[countryAdd]</td>
                <td>$row[contact]<br>
                <td>$row[userLevel]
                <td>$row[userStatus]</td>
                <td align='center'><a style='text-decoration:none;' href='delete.php/?id=$row[userID]'>DELETE</a></td>
                </tr>";
    }
    echo "</table><br><br>"
    ?>
</center>
<?php  echo "<br><br><p align=center><a href='./home-page.php'><input type='button' value='Back To HomePage'/></a></p><br><br>"; ?>