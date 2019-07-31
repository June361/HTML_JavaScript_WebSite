<!doctype html>
<html>
<head>
<script src="selecttype_elec_bom_find.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
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

$sql = "SELECT * FROM elec_bom";
$result = $conn->query($sql);

echo "<form>";
echo "Select a Name:<br/>";
echo "<select name='Name' onchange='showtype(this.value)'>";



if ($result->num_rows > 0) 
{
    // 输出每行数据
    
    while($row = $result->fetch_assoc())
	{
        echo "<option value=".$row["Name"] .">".$row["Name"] ."</option>";

    }
}
else 
{
    echo "0 results";
}
$conn->close();
echo "</select>";
echo "</form>";
?>

<p>
<div id="txtHint"><b>Type information will be listed here.</b></div>
</p>
</body>
</html>	



