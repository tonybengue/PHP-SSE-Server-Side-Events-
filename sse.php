<?php
date_default_timezone_set("Europe/Paris");
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Access-Control-Allow-Origin: *");

// $time = date('r');
$time = date("d-m-Y h:i:s A");

// Send data each second
echo "retry: 1000\n\n";
echo "data: {$time}\n\n";
flush();