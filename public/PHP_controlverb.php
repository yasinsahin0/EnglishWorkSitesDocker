<?php
session_start();

include 'server.php';
$curl = curl_init();
$urll = url();
curl_setopt_array($curl, array(
    CURLOPT_URL => $urll . '/controlverb',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('verb' => $_POST['verb']),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
$_SESSION['controlverb'] = $response;
echo'<meta http-equiv="refresh" content="0;URL=HTML_addVerb.php">';
