<?php
session_start();

include 'server.php';
$curl = curl_init();
$urll = url();
curl_setopt_array($curl, array(
    CURLOPT_URL => $urll .'/randomverb',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('type' => 'regular'),
));

$response = curl_exec($curl);

curl_close($curl);

$result = json_decode($response);
$_SESSION['re_verb1'] = $result->verb1;
$_SESSION['re_verb2'] = $result->verb2;
$_SESSION['re_verb3'] = $result->verb3;
$_SESSION['re_translate'] = $result->translate;
$_SESSION['re_type'] = $result->type;
$_SESSION['re_ex1'] = $result->ex1;
$_SESSION['re_ex1t'] = $result->ex1translate;
$_SESSION['re_ex2'] = $result->ex2;
$_SESSION['re_ex2t'] = $result->ex2translate;
$_SESSION['re_ex3'] = $result->ex3;
$_SESSION['re_ex3t'] = $result->ex3translate;

echo'<meta http-equiv="refresh" content="0;URL=../verbregular.php">';
