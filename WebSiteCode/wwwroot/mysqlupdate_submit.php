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

//Name='".$_POST[Name]."',
//Type='".$_POST[Type]."',
//Brand='".$_POST[Brand]."',
//Comment='".$_POST[Comment]."',

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE `elec_bom_submit` SET 

Quantity='".$_POST[Quantity]."',
Unit='".$_POST[Unit]."',
Require_Date='".$_POST[Require_Date]."',
Storage_Date='".$_POST[Storage_Date]."',
Project_Code='".$_POST[Project_Code]."'
 WHERE Num='".$_POST[Num]."'";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
    die('Error:'  . $sql . "<br>" . $conn->error);
}
echo 'Record update successfully！';

$conn->close();
?>

</body>
</html>