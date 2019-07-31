<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<title>MySQL </title>
</head>

<body> 
<?php
$servername = "148.66.18.130:3306";
$username = "sqlhaoshu362";
$password = "Q6jT6jeq";
$dbname = "sqlsqlhaoshu362";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="INSERT INTO `elec_bom_submit` (
Num,
Name,
Type,
Brand,
Quantity,
Unit,
Require_Date,
Storage_Date,
Comment,
Project_Code)
VALUES
(
'$_POST[Num]',
'$_POST[Name]',
'$_POST[Type]',
'$_POST[Brand]',
'$_POST[Quantity]',
'$_POST[Unit]',
'$_POST[Require_Date]',
'$_POST[Storage_Date]',
'$_POST[Comment]',
'$_POST[Project_Code]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>