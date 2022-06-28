<?php
 include_once 'SQLConnect.php';

 if(count($_POST)>0) {
    $query = mysqli_query($con,"UPDATE users_database SET userID='" . $_POST['userID'] . "', keyword='" . $_POST['keyword'] . "',lastName='" . $_POST['lastName'] . "', firstName='" . $_POST['firstName'] . "', cityAdd='" . $_POST['cityAdd'] . "' , countryAdd='" . $_POST['countryAdd'] . "', contact='" . $_POST['contact'] . "' WHERE userID='" . $_POST['userID'] . "'");
 }
?>
<html>
<head>
</head>
<body>
    <table border="5" width="50%">
    <tr><td width="50%">

        <form name="" method="POST" action="">
        <div><?php if(isset($message)) { echo $message; } ?>
        </div>
        <?php 
            echo "<br><h2><p> UPDATING USER RECORD </p></h2>";
            echo "<br><br>"; ?>
            User ID: <br>
            <input type="text" name="userID" class="txtField" placeholder="Change User ID">
            <br>
            Keyword: <br>
            <input type="text" name="keyword" class="txtField" placeholder="Change Keyword">
            <br>
            Last Name :<br>
            <input type="text" name="lastName" class="txtField" placeholder="Change LastName">
            <br>
            First Name: <br>
            <input type="text" name="firstName" class="txtField" placeholder="Change FirstName">
            <br>
            City Address:<br>
            <input type="text" name="cityAdd" class="txtField" placeholder="Change City Add">
            <br>
            Country Address: <br>
            <input type="text" name="countryAdd" class="txtField" placeholder="Change Country Add">
            <br>
            Contact Number:<br>
            <input type="text" name="contact" class="txtField" placeholder="Change Contact">
            <br>
            <input type="submit" name="submit" value="Update" class="button">
            
            <?php  echo "<br><br><p><a href='./update_record.php'><input type='button' value='DONE'/></a></p><br>"; ?>
            <?php $message = "User Information Successfully Updated!"; ?>
        </form>
    </table>
    <?php  echo "<br><p><a href='./home-page.php'><input type='button' value='Back To HomePage'/></a></p>"; ?>    
 
</body>
</html>