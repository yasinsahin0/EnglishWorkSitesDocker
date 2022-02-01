<?php
session_start();

include 'server.php';
$curl = curl_init();
$urll = url();
curl_setopt_array($curl, array(
    CURLOPT_URL => $urll.'/addWord',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('word' => $_POST['word'],
                                'translate' => $_POST['translate'],
                                'ex1' => $_POST['ex1'],
                                'ex1t' => $_POST['ex1t'],
                                'ex2' => $_POST['ex2'],
                                'ex2t' => $_POST['ex2t']),
));

$response = curl_exec($curl);

curl_close($curl);

if ($response == "ok"):
    $_SESSION['addword'] = $response;
    echo'<meta http-equiv="refresh" content="0;URL=../append/techWordAdd.php">';

else:
    echo'<meta http-equiv="refresh" content="0;URL=../inform/404.html">';
endif;