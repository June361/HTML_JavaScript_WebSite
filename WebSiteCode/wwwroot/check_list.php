<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<title>Work Log </title>
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

$sql = "SELECT * FROM `check`";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>序号</th>
<th>项目代号</th>
<th>提交日期</th>
<th>项目名称</th>
</tr>";

if ($result->num_rows > 0) {
    // 输出每行数据 
    while($row = $result->fetch_assoc())
	{
        echo "<tr>";
		echo "<td>" . $row["id"] . "</td>";
		echo "<td>" . $row["project_code"] . "</td>";
		echo "<td>" . $row["time_date"] . "</td>";
		echo "<td>" . $row["project_name"] . "</td>";
		echo '<td>
                         <form action="check_display.php" method="post"> 
                         <input type="hidden" name="id"  value= '. $row["id"] . '>
                         <input type="Submit" name="Submit" value="更新">
                         </form>
                       </td>';
                echo '<td>
                         <form action="mysqldelete_check.php" method="post"> 
                         <input type="hidden" name="id"  value= '. $row["id"] . '>
                         <input type="Submit" name="Submit" value="删除">
                         </form>
                       </td>';
        }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
			