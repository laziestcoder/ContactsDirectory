<?php
/**
 * Created by PhpStorm.
 * User: Towfiqul Islam
 * Date: 29-Dec-17
 * Time: 01:25 AM
 */
require_once ("init.php");
$table_name="contact";
$sql= "SELECT * FROM `".$table_name."`";
$q = $con->query($sql);
//$row = $q->fetch();
?>