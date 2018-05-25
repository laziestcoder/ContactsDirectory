<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 29-Dec-17
 * Time: 12:59 AM
 */
require_once("init.php");
$table_name = "contact";
if (isset($_POST["submit"])) {
    $firstName = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $mobile = $_POST["mobile"];
    $home = $_POST["home"];
    $office = $_POST["office"];
    $address = $_POST["address"];
    //$address = $conn->quote($_POST["address"]);
    //print_r($address);
    $email = $_POST["email"];

    $sql = "INSERT INTO `" . $table_name . "` (`firstname`, `lastname`, `email`, `mobile_no`, `home_no`, `office_no`, `address`)
    VALUES (:firstname,:lastname,:email,:mobile,:home,:office,:address)";
    //$conn->quote($sql);
    $sql=$conn->prepare($sql);
    $sql->execute(array(
        'firstname'=>$firstName,
        'lastname' => $lastname,
        'email' => $email,
        'mobile' => $mobile,
        'home' => $home,
        'office'=> $office,
        'address' => $address
    ));
   // $conn->exec($sql);
}
?>