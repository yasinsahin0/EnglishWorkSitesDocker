<?php
session_start();

include '../server.php';
$curl = curl_init();
$urll = url();
curl_setopt_array($curl, array(
    CURLOPT_URL => $urll.'/addVerb',
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
                                'ex1' => $_POST['ex1'],
                                'ex1translate' => $_POST['ex1t'],
                                'ex2' => $_POST['ex2'],
                                'ex2translate' => $_POST['ex2t'],
                                'ex3' => $_POST['ex3'],
                                'ex3translate' => $_POST['ex3t']),
));

$response = curl_exec($curl);

curl_close($curl);


if ($response == "ok"):
    $_SESSION['addverb'] = $response;
    echo'<meta http-equiv="refresh" content="0;URL=verbAdd.php">';

else:
    echo'<meta http-equiv="refresh" content="0;URL=../inform/404.php">';
endif;