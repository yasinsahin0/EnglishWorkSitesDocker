<?php
session_start();

include 'server.php';
$curl = curl_init();
$urll = url();

curl_setopt_array($curl, array(
    CURLOPT_URL => $urll . '/controlAdjectives',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('adjectives' => $_POST['adjectives']),
));

$response = curl_exec($curl);

curl_close($curl);

$_SESSION['controladjectives'] = $response;
echo'<meta http-equiv="refresh" content="0;URL=../append/adjectivesAdd.php">';
