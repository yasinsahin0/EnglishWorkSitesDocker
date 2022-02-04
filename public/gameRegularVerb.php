<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>regular</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/image.css">
</head>
<body>
<ul class="menu cf">
    <li><a href="index.php">Ana Sayfa</a></li>
    <li>
        <a>VERB</a>
        <ul class="submenu">
            <li><a href="php/rnd_regular_verb.php">Regular verbs</a></li>
            <li><a href="php/rnd_irregular_verb.php">İrregular verbs</a></li>
            <li><a href="append/verbAdd.php">Add Verb</a></li>

        </ul>
    </li>

    <li>
        <a>Technical</a>
        <ul class="submenu">
            <li><a href="php/rnd_tech_word.php">Words</a></li>
            <li><a href="techSentences.php">Sentences</a></li>
            <li><a href="techParagraph.php">Paragraph</a></li>
        </ul>
    </li>

    <li>
        <a>Every Day</a>
        <ul class="submenu">
            <li><a href="everyWord.php">Words</a></li>
            <li><a href="everySentences.php">Sentences</a></li>
            <li><a href="everyDialogue.php">Dialogue</a></li>
            <li><a href="everyParagraph.php">Paragraph</a></li>
        </ul>
    </li>
    <li>
        <a>Present</a>
        <ul class="submenu">
            <li><a href="present/simple.php">Simple</a></li>
            <li><a href="present/progressive.php">Progressive</a></li>
            <li><a href="present/perfect.php">Perfect</a></li>
            <li><a href="present/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Past</a>
        <ul class="submenu">
            <li><a href="past/simple.php">Simple</a></li>
            <li><a href="past/progressive.php">Progressive</a></li>
            <li><a href="past/perfect.php">Perfect</a></li>
            <li><a href="past/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Future</a>
        <ul class="submenu">
            <li><a href="future/simple.php">Simple</a></li>
            <li><a href="future/progressive.php">Progressive</a></li>
            <li><a href="future/perfect.php">Perfect</a></li>
            <li><a href="future/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Game</a>
        <ul class="submenu">
            <li><a href="php/rnd_game_regular.php">Regular Verb</a></li>
            <li><a href="#">İrRegular Verb</a></li>
            <li><a href="#">Every Day Word</a></li>
        </ul>
    </li>
</ul>


<div id="container">

    <table id="table">
        <tr>
            <td rowspan="6" id="tanım6">
                <?php
                if($_SESSION['game_reg_cevap'] =="Doğru"):
                    echo "<img src='image/onay.png'>";
                else:
                    echo "<img src='image/hata.png'>";
                endif;
                ?>
            </td>
            <td id="tanım10"><?php echo $_SESSION['game_reg_verb'];?></td>
            <form action="php/control_game_regular.php" method="post" enctype="multipart/form-data">
            <td rowspan="6" id="tanım11">
                <input type="submit" name="gonder" id="send" value="">
            </td>
        </tr>
        <tr></tr>

        <tr>

            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_1'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_1'] ?></label>
            </td>

        </tr>
        <tr>

            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_2'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_2'] ?></label>
            </td>
        </tr>
        <tr>

            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_3'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_3'] ?></label>
            </td>
        </tr>
        <tr>

            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_4'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_4'] ?></label>
            </td>
        </tr>
    </table>

    </form>
</div>
<div id="container">
    <form action="php/rnd_game_regular.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="gonder" id="refresh" value="">
    </form>
</div>
</body>
</html>