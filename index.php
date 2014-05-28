<?php
header("Content-type: text/plain");
//print_r($_SERVER); //best beginning evar
$date = date("m-d-Y H:i:s ");// best date evar
$ua = /*"Mozilla/5.0 (iPhone; CPU iPhone OS 7_1_1 like Mac OS X) AppleWebKit/537.51.2 (KHTML, like Gecko) Version/7.0 Mobile/11D201 Safari/9537.53";*/$_SERVER['HTTP_USER_AGENT'];
$uae = explode("/",$ua);
if(strpos($ua,"Firefox/") !== false)
{
$ua = "Firefox v" . $uae[3];
}
elseif(strpos($ua,"Safari/") !== false)
{
$sv = explode(" ",$uae[3]);
if(strpos($ua,"iPhone OS") !== false)
{
$ios = explode(" ",$uae[1]);
$ios = str_replace("_",".",$ios[5]);
$ua = "MobileSafari v{$sv[0]} on iOS {$ios}";
}
else
{
$ua = "Safari v" . $sv[0];
}
}
file_put_contents("a.txt",print_r($_SERVER,1));
echo "{$date} {$_SERVER['REMOTE_ADDR']}:{$_SERVER['SERVER_PORT']} {$_SERVER['SERVER_PROTOCOL']} {$_SERVER['REQUEST_METHOD']} {$_SERVER['REQUEST_URI']} {$ua}";

?>
