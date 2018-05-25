<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 31-Dec-17
 * Time: 12:53 AM
 */
$_id=$_GET["id"];
require_once ("includes/init.php");
$table_name="contact";
$sql= "SELECT * FROM `".$table_name."` WHERE id= '".$_id."'";
$q = $con->query($sql);
$row = $q->fetch();

?>

<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 28-Dec-17
 * Time: 12:01 AM
 */
//require_once ("includes/tableCheck.php");
require_once ("includes/updateContact.php");

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
    First Name: <input type="text" name="firstname" required value="<?php echo $row['firstname']?>"><br><br>
    Last Name: <input type="text" name="lastname"required value="<?php echo $row['lastname']?>"><br><br>
    Mobile No: <input type="text" name="mobile"required value="<?php echo $row['mobile_no']?>"><br><br>
    Home No: <input type="text" name="home" value="<?php echo $row['home_no']?>"><br><br>
    Office No: <input type="text" name="office" value="<?php echo $row['office_no']?>"><br><br>
    Address: <textarea type="text" name="address" ><?php echo $row['address']?></textarea><br><br>
    E-mail: <input type="email" name="email" value="<?php echo $row['email']?>"><br><br>
    <input type="submit" name ="submit" value="update"> <input type="submit" name ="delete" value="Delete">
</form>


</body>
</html>



