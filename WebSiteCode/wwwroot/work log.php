<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<title>工作日志</title>
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

$sql = "SELECT id, content, finish, submission_date, finish_date FROM work_log";
$result = $conn->query($sql);

echo "<table border='0'>
<tr>
<th>序号</th>
<th>内容</th>
<th>完成情况</th>
<th>提交日期</th>
<th>完成日期</th>
</tr>";

$number=0;

if ($result->num_rows > 0) {
    // 输出每行数据  '. $row["id"] .'
    while($row = $result->fetch_assoc())
	{
        $number=$number+1;
        echo "<tr>";
		echo "<td>" . $number . "</td>";
                echo '<form action="mysqlupdate.php" method="post"> ';
 		echo '<td><input type="text" name="content" value='. $row["content"] . '></td>';
  		echo '<td><input type="text" name="finish" value='. $row["finish"] . '></td>';
		echo '<td><input type="date" name="submission_date" value='. $row["submission_date"] . '></td>';
		echo '<td><input type="date" name="finish_date" value='. $row["finish_date"] . '></td>';                   
                echo '<td><input type="hidden" name="id"  value= "'. $row["id"] . '">
                         <input type="Submit" name="Submit" value="更新">
                         </form> 
                     </td>';
                echo '<td><form action="mysqldelete.php" method="post"> 
                         <input type="hidden" name="id"  value= "'. $row["id"] . '">
                         <input type="Submit" name="Submit" value="删除">
                         </form>
                       </td>';
  		echo "</tr>";
    }
    $number=$number+1;
    echo "<tr>";
         echo "<td>" . $number . "</td>";
         echo '<form action="mysqlinsert.php" method="post">
               <td><input type="text" name="content" /></td>
               <td><input type="text" name="finish" /></td>
               <td><input type="date" name="submission_date" /></td>
               <td><input type="date" name="finish_date" /></td>
           <td>
               <input type="Submit" name="Submit" value="添加">
               </form>
           </td>
         </tr>';
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
			