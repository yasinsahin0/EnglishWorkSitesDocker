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
        <a href="">Game</a>
    </li>
</ul>


<div id="container">
    <table id="table">
        <tr>

            <td id="tanım8">Verb  : </td>
            <td id="tanım7"><?php echo $_SESSION['game_reg_verb'];?></td>
            <td id="tanım"></td>
            <td rowspan="5" id="tanım6">
                <form action="php/game_rnd_regular_verb.php" method="post" enctype="multipart/form-data">
                    <input type="submit" name="gonder" id="refresh" value="">
                </form>
            </td>
        </tr>
        <tr></tr>
        <form action="php/game_control_regular_verb.php" method="post" enctype="multipart/form-data">
        <tr>
            <td id="tanım8">Seçenek 1 :</td>
            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_1'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_1'] ?></label>
            </td>
        </tr>
        <tr>
            <td id="tanım8">Seçenek 2 :</td>
            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_2'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_2'] ?></label>
            </td>
        </tr>
        <tr>
            <td id="tanım8">Seçenek 3 :</td>
            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_3'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_3'] ?></label>
            </td>
        </tr>
        <tr>
            <td id="tanım8">Seçenek 4 :</td>
            <td id="tanım7">
                <input type="radio" id="gameradio" name="secenek" value="<?php echo $_SESSION['game_reg_4'] ?>">
                <label for="huey"><?php echo $_SESSION['game_reg_4'] ?></label>
            </td>
        </tr>
            <?php echo $_SESSION['game_reg_cevap'] ?>
    </table>
    <input type="submit" name="gonder" id="add" value="">
    </form>
</div>

</body>
</html>