<?php
$SENSOR_ID = isset($_GET['id']) ? $_GET['id'] : '0';

$w1dir = "/sys/bus/w1/devices/";
$sensorfile = '/home/pi/pi-heating-remote/configs/sensors';
//echo "<html><body><pre>";
$sensors = file($sensorfile, FILE_SKIP_EMPTY_LINES);

$sensor = explode( " = ", $sensors[$SENSOR_ID] );

$ref=$sensor[0];
$name=$sensor[1];
  
  do {
      $raw_data = file_get_contents($w1dir.$ref.'/w1_slave');
      $success = substr( explode( "\n", $raw_data )[0], -3, 3 );
    } while ( $success !="YES" ); 
    
  $value = (float)substr( explode( "\n", $raw_data )[1], -5, 5 ) / 1000.0;
  echo "".$ref."=".$name."=".$value.",";

//echo "</pre></body></html>";
?>
