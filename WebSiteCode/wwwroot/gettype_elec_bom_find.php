<?php
$q=$_GET["q"];

$servername = "148.66.18.130:3306";
$username = "sqlhaoshu362";
$password = "Q6jT6jeq";
$dbname = "sqlsqlhaoshu362";

$con = mysql_connect($servername, $username, $password);
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("sqlsqlhaoshu362", $con);

$sql="SELECT * FROM elec_bom WHERE Name ='".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>序号</th>
<th>名称</th>
<th>型号</th>
<th>品牌</th>
<th>备注</th>
</tr>";

    while($row = mysql_fetch_array($result))
	{
            echo "<tr>";
            echo "<td>" . $row["Num"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Type"] . "</td>";
            echo "<td>" . $row["Brand"] . "</td>";
            echo "<td>" . $row["Comment"] . "</td>";
            echo '<td>
                 <form action="mysqlinsert_submit.php" method="post">
                 <input type="hidden" name="Num"  value="'.$row["Num"].'">
                 <input type="hidden" name="Name" value="'. $row["Name"] .'">
                 <input type="hidden" name="Type" value="'. $row["Type"] .'">
                 <input type="hidden" name="Brand" value="'. $row["Brand"] .'">
                 <input type="hidden" name="Quantity" value="'. $row["Quantity"] .'">
                 <input type="hidden" name="Unit" value="'. $row["Unit"] .' ">
                 <input type="hidden" name="Require_Date" value="'. $row["Require_Date"] .'">
                 <input type="hidden" name="Storage_Date value="'. $row["Storage_Date value"] .'">
                 <input type="hidden" name="Comment" value="'. $row["Comment"] .'">
                 <input type="hidden" name="Project_Code" value="'. $row["Project_Code"] .'">
                 <input type="Submit" name="Submit" value="添加">
                 </form>
                 </td>';
            echo "</tr>";
         }

echo "</table>";

mysql_close($con);
?>