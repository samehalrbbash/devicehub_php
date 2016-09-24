<?php

include("../devicehub/devicehub.php"); // API's path

$sensor1 = new Sensor(Device_UUID, "paste_your_SENSOR_NAME_here");
$sensor1->sendData(40);
print_r($sensor1->getData(2));

$actuator1 = new Actuator(3b0abda7-10a6-437e-a859-c2732278fec1, "sw");
$actuator1->sendState(0);
print_r($actuator1->getStates());

?>
