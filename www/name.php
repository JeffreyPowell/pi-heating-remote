<?php

$SENSOR_ID = isset($_GET['id']) ? $_GET['id'] : '0';

if ( $SENSOR_ID = 0 ) {

    print_r ( '' );

  }else{
  
    $sensorfile = '/home/pi/pi-heating-remote/configs/sensors';

    $sensors = file( $sensorfile );

    $sensor = explode( " = ", $sensors[$SENSOR_ID-1] );

    $name=$sensor[1];

    print_r ( $name );
    
  }
  
?>
