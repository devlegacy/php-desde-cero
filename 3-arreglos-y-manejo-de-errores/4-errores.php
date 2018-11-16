<?php

// error_reporting(0);

$nombre = 'Samuel';

// echo $nombres;


# Guardar errors

ini_set('log_errors', 1);
ini_set('error_logs', '/tmp/error-log.php');
error_log('Hay un error');
