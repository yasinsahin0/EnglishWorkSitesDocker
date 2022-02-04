<?php
session_start();

if($_POST['secenek'] ==$_SESSION['game_reg_real']):
    $_SESSION['game_reg_cevap'] = "Doğru";
    echo "Cevabınız doğru";
    echo "</br></br></br>";
    echo $_SESSION['game_reg_verb'];
    echo "</br></br></br>";
    echo $_SESSION['game_reg_real'];
    echo "</br></br></br>";
    echo'<meta http-equiv="refresh" content="5;URL=rnd_game_regular.php">';
else:
    $_SESSION['game_reg_cevap'] = "Yanlış";
    echo "Cevabınız Yanlış";
    echo "</br></br></br>";
    echo $_SESSION['game_reg_verb'];
    echo "</br></br></br>";
    echo $_SESSION['game_reg_real'];
    echo "</br></br></br>";
    echo'<meta http-equiv="refresh" content="5;URL=rnd_game_regular.php">';
endif;
