<?php
session_start();
include '../server.php';
$curl = curl_init();
$urll = url();

curl_setopt_array($curl, array(
    CURLOPT_URL => $urll.'/gameRegularVerb',
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
$_SESSION['game_reg_verb'] = $result->verb;
$_SESSION['game_reg_real'] = $result->real;
$_SESSION['game_reg_1'] = $result->t1;
$_SESSION['game_reg_2'] = $result->t2;
$_SESSION['game_reg_3'] = $result->t3;
$_SESSION['game_reg_4'] = $result->t4;



echo'<meta http-equiv="refresh" content="0;URL=gameRegularVerb.php">';