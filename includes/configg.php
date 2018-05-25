<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 28-Dec-17
 * Time: 12:34 AM
 */


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pdo_db";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    $con = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Successfully.";
}
catch (PDOException $msg)
{
    //echo "Connection Error: ". $msg->getMessage();
}


?>