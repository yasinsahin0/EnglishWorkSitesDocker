<?php
session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://127.0.0.1:5000/controlverb',
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
header("Location: /htmladdVerb.php");
