<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<title>外购件申报</title>
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

$sql = "SELECT * FROM elec_bom_submit";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>序号</th>
<th>名称</th>
<th>型号</th>
<th>品牌</th>
<th>数量</th>
<th>单位</th>
<th>要求日期</th>
<th>入库日期</th>
<th>备注</th>
<th>项目代号</th>
</tr>";

if ($result->num_rows > 0) {
    // 输出每行数据  '. $row["id"] .'
    while($row = $result->fetch_assoc())
	{
        echo "<tr>";
		echo "<td>" . $row["Num"] . "</td>";
		echo "<td>" . $row["Name"] . "</td>";
		echo "<td>" . $row["Type"] . "</td>";
		echo "<td>" . $row["Brand"] . "</td>";
                echo '<form action="mysqlupdate_submit.php" method="post"> ';
		echo '<td><input type="text" name="Quantity" value='. $row["Quantity"] . '></td>'; 
		echo "<td>" . $row["Unit"] . "</td>";  
		echo '<td><input type="date" name="Require_Date" value='. $row["Require_Date"] . '></td>';  
		echo '<td><input type="date" name="Storage_Date" value='. $row["Storage_Date"] . '></td>';    
		echo '<td><input type="text" name="Comment" value='. $row["Comment"] . '></td>';   
		echo '<td><input type="text" name="Project_Code" value='. $row["Project_Code"] . '></td>';                  
                echo '<td><input type="hidden" name="Num"  value= '. $row["Num"] . '>
                         <input type="Submit" name="Submit" value="更新">
                         </form> 
                       </td>';
                echo '<td>
                         <form action="mysqldelete_submit.php" method="post"> 
                         <input type="hidden" name="Num"  value= '. $row["Num"] . '>
                         <input type="Submit" name="Submit" value="删除">
                         </form>
                       </td>';
  		echo "</tr>";
    }
    $number=$result->num_rows+1;
    echo "<tr>";
         echo "<td>". "$number"."</td>";
         echo '<form action="mysqlinsert_submit.php" method="post">
               <input type="hidden" name="Num"  value="'.$number.'"/>
               <td><input type="text" name="Name" /></td>
               <td><input type="text" name="Type" /></td>
               <td><input type="text" name="Brand" /></td>
               <td><input type="text" name="Quantity" /></td>
               <td><input type="text" name="Unit" /></td>
               <td><input type="date" name="Require_Date" /></td>
               <td><input type="date" name="Storage_Date" /></td>
               <td><input type="text" name="Comment" /></td>
               <td><input type="text" name="Project_Code" /></td>
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
			