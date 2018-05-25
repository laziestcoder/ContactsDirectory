<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 28-Dec-17
 * Time: 12:01 AM
 */
//require_once ("includes/tableCheck.php");
require_once ("includes/addContactInfo.php");

?>

<html>
<head>
    <title>
        Add Contact
    </title>
    <h1>
        Welcome to my <a href="index.php"> Contacts</a>!
    </h1>
    <h3>Add Contacts and various informations:</h3>
</head>
<body>


<form action="" method="post">
    First Name: <input type="text" name="firstname" required><br><br>
    Last Name: <input type="text" name="lastname"required><br><br>
    Mobile No: <input type="text" name="mobile"required><br><br>
    Home No: <input type="text" name="home"><br><br>
    Office No: <input type="text" name="office"><br><br>
    Address: <textarea type="text" name="address"></textarea><br><br>
    E-mail: <input type="email" name="email"><br><br>
    <input type="submit" name ="submit" value="Save">
</form>


</body>
</html>


