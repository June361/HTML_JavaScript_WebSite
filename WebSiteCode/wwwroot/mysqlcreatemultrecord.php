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

</body>
</html>
