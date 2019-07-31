<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<title>MySQLDisplayRecord </title>
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

$sql = "SELECT id, firstname, lastname, email, reg_date FROM myguests";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Reg_Date</th>
</tr>";

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc())
	{
        echo "<tr>";
		echo "<td>" . $row["id"] . "</td>";
 		echo "<td>" . $row["firstname"] . "</td>";
  		echo "<td>" . $row["lastname"] . "</td>";
		echo "<td>" . $row["email"] . "</td>";
		echo "<td>" . $row["reg_date"] . "</td>";
  		echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
