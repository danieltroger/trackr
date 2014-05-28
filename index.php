<?php
header("Content-type: text/plain");
print_r($_SERVER); //best beginning evar
$date = date("m-d-Y H:i:s ");// best date evar
echo "{$date} {$_SERVER['REMOTE_ADDR']}:{$_SERVER['SERVER_PORT']} {$_SERVER['SERVER_PROTOCOL']} {$_SERVER['REQUEST_METHOD']} {$_SERVER['REQUEST_URI']}";
?>
