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
$sql = "UPDATE `check` SET 
project_code='".$_POST[project_code]."',
time_date='".$_POST[time_date]."',
project_name='".$_POST[project_name]."',
mechanical_designer='".$_POST[mechanical_designer]."',
electrical_designer='".$_POST[electrical_designer]."',
security_light_curtain_height='".$_POST[security_light_curtain_height]."',
security_door_lock='".$_POST[security_door_lock]."',
safety_relay='".$_POST[safety_relay]."',
cylinder_quantity='".$_POST[cylinder_quantity]."',
name_of_cylinder_1='".$_POST[name_of_cylinder_1]."',
name_of_cylinder_2='".$_POST[name_of_cylinder_2]."',
name_of_cylinder_3='".$_POST[name_of_cylinder_3]."',
name_of_cylinder_4='".$_POST[name_of_cylinder_4]."',
name_of_cylinder_5='".$_POST[name_of_cylinder_5]."',
name_of_cylinder_6='".$_POST[name_of_cylinder_6]."',
name_of_cylinder_7='".$_POST[name_of_cylinder_7]."',
name_of_cylinder_8='".$_POST[name_of_cylinder_8]."',
name_of_cylinder_9='".$_POST[name_of_cylinder_9]."',
name_of_cylinder_10='".$_POST[name_of_cylinder_10]."',
name_of_cylinder_11='".$_POST[name_of_cylinder_11]."',
name_of_cylinder_12='".$_POST[name_of_cylinder_12]."',
name_of_cylinder_13='".$_POST[name_of_cylinder_13]."',
name_of_cylinder_14='".$_POST[name_of_cylinder_14]."',
name_of_cylinder_15='".$_POST[name_of_cylinder_15]."',
name_of_cylinder_16='".$_POST[name_of_cylinder_16]."',
name_of_cylinder_17='".$_POST[name_of_cylinder_17]."',
name_of_cylinder_18='".$_POST[name_of_cylinder_18]."',
name_of_cylinder_19='".$_POST[name_of_cylinder_19]."',
name_of_cylinder_20='".$_POST[name_of_cylinder_20]."',
squantity_of_solenoid_valve='".$_POST[squantity_of_solenoid_valve]."',
name_of_electromagnetic_valve_1='".$_POST[name_of_electromagnetic_valve_1]."',
name_of_electromagnetic_valve_2='".$_POST[name_of_electromagnetic_valve_2]."',
name_of_electromagnetic_valve_3='".$_POST[name_of_electromagnetic_valve_3]."',
name_of_electromagnetic_valve_4='".$_POST[name_of_electromagnetic_valve_4]."',
name_of_electromagnetic_valve_5='".$_POST[name_of_electromagnetic_valve_5]."',
name_of_electromagnetic_valve_6='".$_POST[name_of_electromagnetic_valve_6]."',
name_of_electromagnetic_valve_7='".$_POST[name_of_electromagnetic_valve_7]."',
name_of_electromagnetic_valve_8='".$_POST[name_of_electromagnetic_valve_8]."',
name_of_electromagnetic_valve_9='".$_POST[name_of_electromagnetic_valve_9]."',
name_of_electromagnetic_valve_10='".$_POST[name_of_electromagnetic_valve_11]."',
name_of_electromagnetic_valve_12='".$_POST[name_of_electromagnetic_valve_12]."',
isolation_of_defective_products='".$_POST[isolation_of_defective_products]."',
pressure_displacement_monitor='".$_POST[pressure_displacement_monitor]."',
contactor='".$_POST[contactor]."',
leak_detector='".$_POST[leak_detector]."',
liquid_level_meter='".$_POST[liquid_level_meter]."',
peristaltic_pump='".$_POST[peristaltic_pump]."',
switching_power_supply='".$_POST[switching_power_supply]."',
frequency_converter='".$_POST[frequency_converter]."',
ordinary_motor='".$_POST[ordinary_motor]."',
rfid='".$_POST[rfid]."',
scanning_gun='".$_POST[scanning_gun]."',
marking_machine='".$_POST[marking_machine]."',
screw_machine='".$_POST[screw_machine]."',
electrical_cabinet='".$_POST[electrical_cabinet]."',
width='".$_POST[width]."',
height='".$_POST[height]."',
depth='".$_POST[depth]."',
relay='".$_POST[relay]."',
solid_state_relay='".$_POST[solid_state_relay]."',
cable_box='".$_POST[cable_box]."',
touch_screen_operation_box='".$_POST[touch_screen_operation_box]."',
qualification_indicator_light='".$_POST[qualification_indicator_light]."',
buzzer='".$_POST[buzzer]."',
start_mode='".$_POST[start_mode]."',
encoder='".$_POST[encoder]."',
visual_system='".$_POST[visual_system]."',
the_work_is_in_place_detection='".$_POST[the_work_is_in_place_detection]."',
robot='".$_POST[robot]."',
slow_start_valve='".$_POST[slow_start_valve]."',
error_detection='".$_POST[error_detection]."',
electronic_transformer='".$_POST[electronic_transformer]."',
servo_motor='".$_POST[servo_motor]."',
servo_motor_brake='".$_POST[servo_motor_brake]."',
servo_electric_cylinder='".$_POST[servo_electric_cylinder]."',
grating_ruler='".$_POST[grating_ruler]."',
gas_pressure_sensors='".$_POST[gas_pressure_sensors]."',
displacement_sensor='".$_POST[displacement_sensor]."',
pressure_sensor='".$_POST[pressure_sensor]."',
torque_sensor='".$_POST[torque_sensor]."',
flow_sensor='".$_POST[flow_sensor]."',
db_meter='".$_POST[db_meter]."',
temperature_sensor='".$_POST[temperature_sensor]."',
touch_screen='".$_POST[touch_screen]."',
plc='".$_POST[plc]."',
air_pressure_switch='".$_POST[air_pressure_switch]."',
switch='".$_POST["switch"]."',
conversion_module='".$_POST[conversion_module]."',
communication_transformation_module='".$_POST[communication_transformation_module]."',
distributed_io='".$_POST[distributed_io]."',
isolating_transformer='".$_POST[isolating_transformer]."',
light='".$_POST[light]."',
interior_lighting='".$_POST[interior_lighting]."',
desk_fan='".$_POST[desk_fan]."',
electrical_cabinet_air_conditioning='".$_POST[electrical_cabinet_air_conditioning]."',
display='".$_POST[display]."',
industrial_computer='".$_POST[industrial_computer]."',
welding_machine='".$_POST[welding_machine]."',
network_hub='".$_POST[network_hub]."',
data_system='".$_POST[data_system]."',
electrical_signal_torque_wrench='".$_POST[electrical_signal_torque_wrench]."',
high_pressure_gas_source='".$_POST[high_pressure_gas_source]."',
vibration_plates='".$_POST[vibration_plates]."'
 WHERE id='".$_POST[id]."'";
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
    die('Error:'  . $sql . "<br>" . $conn->error);
}
echo 'Record update successfully！';

$conn->close();
?>

</body>
</html>