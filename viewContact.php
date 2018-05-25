<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 27-Dec-17
 * Time: 11:53 PM
 */

require_once("includes/viewAll.php");

?>

<html>
<head>
    <title>
        View All Contact
    </title>
    <h1>
        Welcome to my <a href="index.php"> Contacts</a>!
    </h1>
    <h3>All Contacts and their name address mobile number:</h3>
</head>
<body>
<table style="width:100%">
    <tr>
        <td>Name</td>
        <td>Mobile</td>
        <td>Address</td>
    </tr>

    <?php
    while ($row = $q->fetch()) {
        //echo "<pre>";
        ?>
        <tr>
            <td>
                <?php echo "<a href='viewProfile.php?id=" .$row['id']. "' >"; print $row['firstname']."</a>"; ?>
            </td>
            <td>
                <?php print $row['mobile_no']; ?>
            </td>
            <td>
                <?php print $row['address']; ?>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>


