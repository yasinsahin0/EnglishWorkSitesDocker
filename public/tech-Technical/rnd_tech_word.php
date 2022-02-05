<?php
session_start();
include '../server.php';
$curl = curl_init();
$urll = url();
curl_setopt_array($curl, array(
    CURLOPT_URL => $urll .'/randomWord',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
));

$response = curl_exec($curl);

curl_close($curl);

$result = json_decode($response);
$_SESSION['tech_word'] = $result->word;
$_SESSION['tech_translate'] = $result->translate;
$_SESSION['tech_ex1'] = $result->ex1;
$_SESSION['tech_ex1t'] = $result->ex1t;



echo'<meta http-equiv="refresh" content="0;URL=techWord.php">';
