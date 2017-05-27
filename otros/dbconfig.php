<?php
error_reporting(0);
$host = "us-cdbr-azure-west-b.cleardb.com";
$user = "bc421af357ab75";
$password = "3f32947c";
$datbase = "tallerdemo";
mysql_connect($host,$user,$password);
mysql_select_db($datbase);
?>
<?php
$host="us-cdbr-azure-west-b.cleardb.com";
$user="bc421af357ab75";
$password="3f32947c";
$db="tallerdemo";
$con = new mysqli($host,$user,$password,$db);
mysql_connect($host,$user,$password);
?>