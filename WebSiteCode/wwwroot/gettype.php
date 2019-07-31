<?php
$q=$_GET["q"];

$servername = "148.66.18.130:3306";
$username = "sqlhaoshu362";
$password = "Q6jT6jeq";
$dbname = "sqlsqlhaoshu362";

$con = mysql_connect($servername, $username, $password);
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("sqlsqlhaoshu362", $con);

$sql="SELECT * FROM elec_bom WHERE Num = '".$q."'";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
 {
 echo "Num: ". $row['Num'] ."<br />";
 echo "Name: ". $row['Name'] ."<br />";
 echo "Type: ". $row['Type'] ."<br />";
 echo "Brand: ". $row['Brand'] ."<br />";
 echo "Quantity: ". $row['Quantity'] ."<br />";
 echo "Unit: ". $row['Unit'] ."<br />";
 echo "Require Date: ". $row['Require Date'] ."<br />";
 echo "Storage Date: ". $row['Storage Date'] ."<br />";
 echo "Comment: ". $row['Comment'] ."<br />";
 }

mysql_close($con);
?>