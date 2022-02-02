<?php
session_start();

if($_POST['secenek'] ==$_SESSION['game_reg_real']):
    $_SESSION['game_reg_cevap'] = "Doğru";
    echo'<meta http-equiv="refresh" content="0;URL=game_rnd_regular_verb.php">';
else:
    $_SESSION['game_reg_cevap'] = "Yanlış";
    echo'<meta http-equiv="refresh" content="0;URL=../gameRegularVerb.php">';
endif;
