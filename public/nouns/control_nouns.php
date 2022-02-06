<?php
session_start();

include '../server.php';
$curl = curl_init();
$urll = url();

curl_setopt_array($curl, array(
    CURLOPT_URL => $urll . '/controlNouns',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('nouns' => $_POST['nouns']),
));

$response = curl_exec($curl);

curl_close($curl);

$_SESSION['control_nouns'] = $response;
echo'<meta http-equiv="refresh" content="0;URL=nounsAdd.php">';
