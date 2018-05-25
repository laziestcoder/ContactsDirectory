<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 29-Dec-17
 * Time: 12:59 AM
 */
require_once ("init.php");
$table_name="contact";
if(isset($_POST["submit"])) {
    $firstName = $_POST["firstname"];
    $lastname =$_POST["lastname"];
    $mobile =$_POST["mobile"];
    $home =$_POST["home"];
    $office =$_POST["office"];
    $address =$_POST["address"];
    $email =$_POST["email"];
    //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

    $sql="UPDATE `".$table_name."` SET `firstname`='".$firstName."', `lastname`='".$lastname."', `email`='".$email."',
    `mobile_no`='".$mobile."',`home_no`='".$home."', `office_no`='".$office."', `address`='".$address."' where id='".$_id."'";
    $conn->exec($sql);
}
if(isset($_POST["delete"])) {
    $sql="DELETE FROM `".$table_name."`  where id='".$_id."'";
    $conn->exec($sql);
    header("location:index.php");
    die();
}
?>