<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>irregular</title>
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
            <li><a href="php/game_rnd_regular_verb.php">Regular Verb</a></li>
            <li><a href="#">İrRegular Verb</a></li>
            <li><a href="#">Every Day Word</a></li>
        </ul>
    </li>
</ul>


<div id="container">

    <table id="table">
        <tr>
            <td id="tanım">Verb :</td>
            <td id="tanım9"><?php echo $_SESSION['ir_verb1'];?></td>
            <td id="tanım9"><?php echo $_SESSION['ir_verb2'];?></td>
            <td id="tanım9"><?php echo $_SESSION['ir_verb3'];?></td>
            <td rowspan="5" id="tanım6">
                <form action="php/rnd_irregular_verb.php" method="post" enctype="multipart/form-data">
                    <input type="submit" name="gonder" id="refresh" value="">
                </form>
            </td>
        </tr>
        <tr>
            <td id="tanım">Translate :</td>
            <td id="tanım5" colspan="3"><?php echo $_SESSION['ir_translate'];?></td>
        </tr>
        <tr>
            <td id="tanım">Type :</td>
            <td id="tanım5" colspan="3"><?php echo $_SESSION['ir_type'];?></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><?php echo $_SESSION['ir_ex1'];?></td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><?php echo $_SESSION['ir_ex1t'];?></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><?php echo $_SESSION['ir_ex2'];?></td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><?php echo $_SESSION['ir_ex2t'];?></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><?php echo $_SESSION['ir_ex3'];?></td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><?php echo $_SESSION['ir_ex3t'];?></td>
        </tr>
    </table>
</div>
</body>
</html>