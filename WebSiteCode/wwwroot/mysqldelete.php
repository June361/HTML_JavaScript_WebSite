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
$sql = "DELETE FROM `work_log` WHERE id= BINARY '"."$_POST[id]"."'";

//mysqli_select_db( $conn, 'RUNOOB' );
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
    die('Error:'  . $sql . "<br>" . $conn->error);
}
echo 'Record deleted successfully！';

$conn->close();
?>

</body>
</html>