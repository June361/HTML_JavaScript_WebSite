<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<title>电气交流审查表</title> 
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

$sql = "SELECT * FROM `check` WHERE id='".$_POST[id]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{

$row = $result->fetch_assoc();

echo '<form action="mysqlupdate_ckeck.php" method="post">
 <input type="hidden" name="id" value= '.$row[id] . '>
<p>项目代号</p>
<p>
 <input type="text" name="project_code" value= '.$row[project_code] . '>
</p>
<p>时间日期</p>
<p>
  <input type="text" name="time_date" value= '.$row[time_date]. '>
</p>
<p>项目名称</p>
<p>
  <input type="text" name="project_name" value= '.$row[project_name] . '>
</p>
<p>机械设计</p>
<p>
  <input type="text" name="mechanical_designer" value= '.$row[mechanical_designer] . '>
</p>
<p>电气设计</p>
<p>
  <input type="text" name="electrical_designer" value= '.$row[electrical_designer] . '>
</p>
<p>安全光幕</p>
<p>
  <input type="text" name="security_light_curtain" value= '.$row[security_light_curtain] . '>
</p>
<p>安全光幕高度</p>
<p>
  <input type="text" name="security_light_curtain_height" value= '.$row[security_light_curtain_height] . '>
</p>
<p>安全门锁</p>
<p>
  <input type="text" name="security_door_lock" value= '.$row[security_door_lock] . '>
</p>
<p>安全继电器</p>
<p>
  <input type="text" name="safety_relay" value= '.$row[safety_relay] . '>
</p>
<p>气缸数量</p>
<p>
  <input type="text" name="cylinder_quantity" value= '.$row[cylinder_quantity] . '>
</p>
<p>气缸1名称</p>
<p>
  <input type="text" name="name_of_cylinder_1" value= '.$row[name_of_cylinder_1] . '>
</p>
<p>气缸2名称</p>
<p>
  <input type="text" name="name_of_cylinder_2" value= '.$row[name_of_cylinder_2] . '>
</p>
<p>气缸3名称</p>
<p>
  <input type="text" name="name_of_cylinder_3" value= '.$row[name_of_cylinder_3] . '>
</p>
<p>气缸4名称</p>
<p>
  <input type="text" name="name_of_cylinder_4" value= '.$row[name_of_cylinder_4] . '>
</p>
<p>气缸5名称</p>
<p>
  <input type="text" name="name_of_cylinder_5" value= '.$row[name_of_cylinder_5] . '>
</p>
<p>气缸6名称</p>
<p>
  <input type="text" name="name_of_cylinder_6" value= '.$row[name_of_cylinder_6] . '>
</p>
<p>气缸7名称</p>
<p>
  <input type="text" name="name_of_cylinder_7" value= '.$row[name_of_cylinder_7] . '>
</p>
<p>气缸8名称</p>
<p>
  <input type="text" name="name_of_cylinder_8" value= '.$row[name_of_cylinder_8] . '>
</p>
<p>气缸9名称</p>
<p>
  <input type="text" name="name_of_cylinder_9" value= '.$row[name_of_cylinder_9] . '>
</p>
<p>气缸10名称</p>
<p>
  <input type="text" name="name_of_cylinder_10" value= '.$row[name_of_cylinder_10] . '>
</p>
<p>气缸11名称</p>
<p>
  <input type="text" name="name_of_cylinder_11" value= '.$row[name_of_cylinder_11] . '>
</p>
<p>气缸12名称</p>
<p>

  <input type="text" name="name_of_cylinder_12" value= '.$row[name_of_cylinder_12] . '>
</p>
<p>气缸13名称</p>
<p>
  <input type="text" name="name_of_cylinder_13" value= '.$row[name_of_cylinder_13] . '>
</p>
<p>气缸14名称</p>
<p>
  <input type="text" name="name_of_cylinder_14" value= '.$row[name_of_cylinder_14] . '>
</p>
<p>气缸15名称</p>
<p>
  <input type="text" name="name_of_cylinder_15" value= '.$row[name_of_cylinder_15] . '>
</p>
<p>气缸16名称</p>
<p>
  <input type="text" name="name_of_cylinder_16" value= '.$row[name_of_cylinder_16] . '>
</p>
<p>气缸17名称</p>
<p>
  <input type="text" name="name_of_cylinder_17" value= '.$row[name_of_cylinder_17] . '>
</p>
<p>气缸18名称</p>
<p>
  <input type="text" name="name_of_cylinder_18" value= '.$row[name_of_cylinder_18] . '>
</p>
<p>气缸19名称</p>
<p>
  <input type="text" name="name_of_cylinder_19" value= '.$row[name_of_cylinder_19] . '>
</p>
<p>气缸20名称</p>
<p>
  <input type="text" name="name_of_cylinder_20" value= '.$row[name_of_cylinder_20] . '>
</p>
<p>电磁阀数量</p>
<p>
  <input type="text" name="quantity_of_solenoid_valve" value= '.$row[quantity_of_solenoid_valve] . '>
</p>
<p>电磁1阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_1" value= '.$row[name_of_electromagnetic_valve_1] . '>
</p>
<p>电磁2阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_2" value= '.$row[name_of_electromagnetic_valve_2] . '>

</p>
<p>电磁3阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_3" value= '.$row[name_of_electromagnetic_valve_3] . '>
</p>
<p>电磁4阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_4" value= '.$row[name_of_electromagnetic_valve_4] . '>
</p>
<p>电磁5阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_5" value= '.$row[name_of_electromagnetic_valve_5] . '>
</p>
<p>电磁6阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_6" value= '.$row[name_of_electromagnetic_valve_6] . '>
</p>
<p>电磁7阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_7" value= '.$row[name_of_electromagnetic_valve_7] . '>
</p>
<p>电磁8阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_8" value= '.$row[name_of_electromagnetic_valve_8] . '>
</p>
<p>电磁9阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_9" value= '.$row[name_of_electromagnetic_valve_9] . '>
</p>
<p>电磁10阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_10" value= '.$row[name_of_electromagnetic_valve_10] . '>
</p> 
<p>电磁11阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_11" value= '.$row[name_of_electromagnetic_valve_11] . '>
</p>
<p>电磁12阀名称</p>
<p>
  <input type="text" name="name_of_electromagnetic_valve_12" value= '.$row[name_of_electromagnetic_valve_12] . '>
</p>
<p>不合格品隔离</p>
<p>
  <input type="text" name="isolation_of_defective_products" value= '.$row[isolation_of_defective_products] . '>
</p>
<p>压力位移监控仪</p>
<p>
  <input type="text" name="pressure_displacement_monitor" value= '.$row[pressure_displacement_monitor] . '>
</p>
<p>接触器</p>
<p>
  <input type="text" name="contactor" value= '.$row[contactor] . '>
</p>
<p>黄油泵</p>
<p>
  <input type="text" name="yellow_oil_pump" value= '.$row[yellow_oil_pump] . '>
</p>
<p>泄漏仪</p>
<p>
  <input type="text" name="leak_detector" value= '.$row[leak_detector] . '>
</p>
<p>液位计</p>
<p>
  <input type="text" name="liquid_level_meter" value= '.$row[liquid_level_meter] . '>
</p>
<p>蠕动泵</p>
<p>
  <input type="text" name="peristaltic_pump" value= '.$row[peristaltic_pump] . '>
</p>
<p>开关电源</p>
<p>
  <input type="text" name="switching_power_supply" value= '.$row[switching_power_supply] . '>
</p>
<p>变频器</p>
<p>
  <input type="text" name="frequency_converter" value= '.$row[frequency_converter] . '>
</p>
<p>普通电机</p>
<p>
  <input type="text" name="ordinary_motor" value= '.$row[ordinary_motor] . '>
</p>
<p>RFID</p>
<p>
  <input type="text" name="rfid" value= '.$row[rfid] . '>
</p>
<p>扫描枪</p>
<p>
  <input type="text" name="scanning_gun" value= '.$row[scanning_gun] . '>
</p>
<p>打标机</p>
<p>
  <input type="text" name="marking_machine" value= '.$row[marking_machine] . '>
</p>
<p>拧紧机</p>
<p>
  <input type="text" name="screw_machine" value= '.$row[screw_machine] . '>
</p>
<p>电器柜</p>
<p>
  <input type="text" name="electrical_cabinet" value= '.$row[electrical_cabinet] . '>
</p>
<p>宽</p>
<p>
  <input type="text" name="width" value= '.$row[width] . '>
</p>
<p>高</p>
<p>
  <input type="text" name="height" value= '.$row[height] . '>
</p>
<p>深</p>
<p>
  <input type="text" name="depth" value= '.$row[depth] . '>
</p>
<p>继电器</p>
<p>
  <input type="text" name="relay" value= '.$row[relay] . '>
</p>
<p>固态继电器</p>
<p>
  <input type="text" name="solid_state_relay" value= '.$row[solid_state_relay] . '>
</p>
<p>分线盒</p>
<p>
  <input type="text" name="cable_box" value= '.$row[cable_box] . '>
</p>
<p>触摸屏操作盒</p>
<p>
  <input type="text" name="touch_screen_operation_box" value= '.$row[touch_screen_operation_box] . '>
</p>
<p>合格指示灯</p>
<p>
  <input type="text" name="qualification_indicator_light" value= '.$row[qualification_indicator_light] . '>
</p>
<p>蜂鸣器</p>
<p>
  <input type="text" name="buzzer" value= '.$row[buzzer] . '>
</p>
<p>启动方式</p>
<p>
  <input type="text" name="start_mode" value= '.$row[start_mode] . '>
</p>
<p>编码器</p>
<p>
  <input type="text" name="encoder" value= '.$row[encoder] . '>
</p>
<p>视觉系统</p>
<p>
  <input type="text" name="visual_system" value= '.$row[visual_system] . '>
</p>
<p>工件在位检测</p>
<p>
  <input type="text" name="the_work_is_in_place_detection" value= '.$row[the_work_is_in_place_detection] . '>
</p>
<p>机器人</p>
<p>
  <input type="text" name="robot" value= '.$row[robot] . '>
</p>
<p>缓慢启动阀</p>
<p>
  <input type="text" name="slow_start_valve" value= '.$row[slow_start_valve] . '>
</p>
<p>防错检测</p>
<p>
  <input type="text" name="error_detection" value= '.$row[error_detection] . '>
</p>
<p>电子变压器</p>
<p>
  <input type="text" name="electronic_transformer" value= '.$row[electronic_transformer] . '>
</p>
<p>伺服电机</p>
<p>
  <input type="text" name="servo_motor" value= '.$row[servo_motor] . '>
</p>
<p>伺服电机刹车</p>
<p>
  <input type="text" name="servo_motor_brake" value= '.$row[servo_motor_brake] . '>
</p>
<p>伺服电缸</p>
<p>
  <input type="text" name="servo_electric_cylinder" value= '.$row[servo_electric_cylinder] . '>
</p>
<p>光栅尺</p>
<p>
  <input type="text" name="grating_ruler" value= '.$row[grating_ruler] . '>
</p>
<p>气体压力传感器</p>
<p>
  <input type="text" name="gas_pressure_sensors" value= '.$row[gas_pressure_sensors] . '>
</p>
<p>位移传感器</p>
<p>
  <input type="text" name="displacement_sensor" value= '.$row[displacement_sensor] . '>
</p>
<p>压力传感器</p>
<p>
  <input type="text" name="pressure_sensor" value= '.$row[pressure_sensor] . '>
</p>
<p>扭矩传感器</p>
<p>
  <input type="text" name="torque_sensor" value= '.$row[torque_sensor] . '>
</p>
<p>流量传感器</p>
<p>
  <input type="text" name="flow_sensor" value= '.$row[flow_sensor] . '>
</p>
<p>分贝计</p>
<p>
  <input type="text" name="db_meter" value= '.$row[db_meter] . '>
</p>
<p>温度传感器</p>
<p>
  <input type="text" name="temperature_sensor" value= '.$row[temperature_sensor] . '>
</p>
<p>触摸屏</p>
<p>
  <input type="text" name="touch_screen" value= '.$row[touch_screen] . '>
</p>
<p>PLC</p>
<p>
  <input type="text" name="plc" value= '.$row[plc] . '>
</p>
<p>气压开关</p>
<p>
  <input type="text" name="air_pressure_switch" value= '.$row[air_pressure_switch] . '>
</p>
<p>转换开关</p>
<p>
  <input type="text" name="switch" value= '.$row["switch"] . '>
</p>
<p>转换模块</p>
<p>
  <input type="text" name="conversion_module" value= '.$row[conversion_module] . '>
</p>
<p>通讯转换模块</p>
<p>
  <input type="text" name="communication_transformation_module" value= '.$row[communication_transformation_module] . '>
</p>
<p>分布式IO</p>
<p>
  <input type="text" name="distributed_io" value= '.$row[distributed_io] . '>
</p>
<p>隔离变压器</p>
<p>
  <input type="text" name="isolating_transformer" value= '.$row[isolating_transformer] . '>
</p>
<p>照明灯</p>
<p>
  <input type="text" name="light" value= '.$row[light] . '>
</p>
<p>柜内照明</p>
<p>
  <input type="text" name="interior_lighting" value= '.$row[interior_lighting] . '>
</p>
<p>工作台风扇</p>
<p>
  <input type="text" name="desk_fan" value= '.$row[desk_fan] . '>
</p>
<p>电器柜空调</p>
<p>
  <input type="text" name="electrical_cabinet_air_conditioning" value= '.$row[electrical_cabinet_air_conditioning] . '>
</p>
<p>显示器</p>
<p>
  <input type="text" name="display" value= '.$row[display] . '>
</p>
<p>工控机</p>
<p>
  <input type="text" name="industrial_computer" value= '.$row[industrial_computer] . '>
</p>
<p>焊机</p>
<p>
  <input type="text" name="welding_machine" value= '.$row[welding_machine] . '>
</p>
<p>网络交换机</p>
<p>
  <input type="text" name="network_hub" value= '.$row[network_hub] . '>
</p>
<p>数据系统</p>
<p>
  <input type="text" name="data_system" value= '.$row[data_system] . '>
</p>
<p>电信号扭矩扳手</p>
<p>
  <input type="text" name="electrical_signal_torque_wrench" value= '.$row[electrical_signal_torque_wrench] . '>
</p>
<p>高压气源</p>
<p>
  <input type="text" name="high_pressure_gas_source" value= '.$row[high_pressure_gas_source] . '>
</p>
<p>振动盘</p>
<p>
  <input type="text" name="vibration_plates" value= '.$row[vibration_plates] . '>
</p>
<input type="Submit" name="Submit" value="更新">';
} 
else
{
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
