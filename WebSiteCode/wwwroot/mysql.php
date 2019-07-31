<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MySQL </title>

<style type="text/css">
.body {
	background-color: #0F9;
}

.DIV1 {
	background-color: #0F9;
	margin: 5px;
	padding: 10px;
}
.DIV1 p {
	font-size: 36px;
}
.A20170229 {
	z-index: auto;
	width: auto;
	height: auto;
	margin: 0px;
	padding: 0px;
}
.A20170245 {
}
</style>
</head>
<body class="body"> 
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

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
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

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
$servername = "148.66.18.130:3306";
$username = "sqlhaoshu362";
$password = "Q6jT6jeq";
$dbname = "sqlsqlhaoshu362";

// 创建链接
$conn = 
new mysqli($servername, $username, $password, $dbname);

// 检查链接

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO 
MyGuests (firstname, lastname, email)

VALUES ('John', 'Doe', 'john@example.com');";

$sql .= "INSERT INTO 
MyGuests (firstname, lastname, email)

VALUES ('Mary', 'Moe', 'mary@example.com');";

$sql .= "INSERT INTO 
MyGuests (firstname, lastname, email)

VALUES ('Julie', 'Dooley', 'julie@example.com')";


if ($conn->multi_query($sql) === TRUE) {
echo "New 
records created successfully";
} else {
echo 
"Error: " . $sql . "
" . $conn->error;
}

$conn->close();
?>
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

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
