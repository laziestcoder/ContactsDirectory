<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 27-Dec-17
 * Time: 08:42 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pdo_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    //echo "<br>Conn<br>".$conn."<br>";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";

    $sql = "IF NOT EXISTS(select * from sys.databases where name='" . $db_name . "')";
        //echo "DB NOT Exist";
   $r=0;
     $r=$conn->query($sql);
    if(!$r){
        $sql = "CREATE DATABASE " . $db_name;
        echo "DB Created Successfully!";
        //$conn->exec($sql);

    }
    else {

        echo "DB Exist!";
        //echo "Connection failed: " . $msg->getMessage();
    }
    // use exec() because no results are returned
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage()."<br>";
    $sql = "CREATE DATABASE " . $db_name;//." Collation=utf8_general_ci";
    echo "DB Created Successfully!";
   // $conn->exec($sql);
    //var_dump($e);
}

$conn = null; // closing opened connection
?>