<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 27-Dec-17
 * Time: 10:30 PM
 */


require_once("configg.php");
$table_name="Contact";

    $sql = "IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.TABLES 
           WHERE TABLE_NAME = N'".$table_name."')";
    //$conn->exec($sql);
    //print_r($conn->query($sql));
    //print_r($conn);
    //if($conn->query($sql)){
       // echo "Table NOT Exist!";

        $sql = "CREATE TABLE ".$table_name." (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    mobile_no INT(15),
    home_no INT(15),
    office_no INT(15),
    address VARCHAR(100)
    )";

        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "Table created successfully";
        // sql to create table
        //echo $sql . "<br>" . $e->getMessage();
   // }

$conn = null;
?>