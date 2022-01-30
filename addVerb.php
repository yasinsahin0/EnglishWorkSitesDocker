<?php
session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://127.0.0.1:5000/addVerb',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('verb1' => $_POST['verb1'],
                                'verb2' => $_POST['verb2'],
                                'verb3' => $_POST['verb3'],
                                'translate' => $_POST['translate'],
                                'verbtype' => $_POST['verbtype'],
                                'explanation' => $_POST['exp']),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

if ($response == "ok"):
    $_SESSION['addverb'] = $response;
    header("Location: /htmladdVerb.php");

else:
    header("Location: /404.php");
endif;