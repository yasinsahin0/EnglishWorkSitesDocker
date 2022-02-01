<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eng Time Ana Sayfa</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/image.css">
</head>
<body>
<ul class="menu cf">
    <li><a href="../index.php">Ana Sayfa</a></li>
    <li>
        <a>VERB</a>
        <ul class="submenu">
            <li><a href="../php/rnd_regular_verb.php">Regular verbs</a></li>
            <li><a href="../php/rnd_irregular_verb.php">İrregular verbs</a></li>
            <li><a href="../append/verbAdd.php">Add Verb</a></li>

        </ul>
    </li>

    <li>
        <a>Technical</a>
        <ul class="submenu">
            <li><a href="../php/rnd_tech_word.php">Words</a></li>
            <li><a href="../techSentences.php">Sentences</a></li>
            <li><a href="../techParagraph.php">Paragraph</a></li>
        </ul>
    </li>

    <li>
        <a>Every Day</a>
        <ul class="submenu">
            <li><a href="../everyWord.php">Words</a></li>
            <li><a href="../everySentences.php">Sentences</a></li>
            <li><a href="../everyDialogue.php">Dialogue</a></li>
            <li><a href="../everyParagraph.php">Paragraph</a></li>
        </ul>
    </li>
    <li>
        <a href="">Game</a>
    </li>
</ul>
<div id="container">
    <table id="table">
        <form action="../php/control_word.php" method="post" enctype="multipart/form-data">
            <tr>
                <td id="tanım">Word Control :</td>
                <td id="tanım2"><input type="text" name="word"></td>
                <td id="tanım3"><input type="submit" name="gonder" id="refresh" value=""></td>
                <td id="tanım4"><?php echo $_SESSION['controlword']?></td>
            </tr>
        </form>
    </table>
</div>
<form action="../php/add_tech_word.php" method="post" enctype="multipart/form-data">
<div id="container">
    <table id="table">
        <tr>
            <td id="tanım">Word :</td>
            <td id="tanım5"><input type="text" name="word" placeholder="Kelimeyi yazınız..."></td>
            <td rowspan="2" id="tanım6">
                    <input type="submit" name="gonder" id="add" value="">
            </td>
            <td rowspan="2" id="tanım6">
                <?php echo $_SESSION['addword']?>
            </td>
        </tr>
        <tr>
            <td id="tanım">Translate :</td>
            <td id="tanım5"><input type="text" name="translate" placeholder="Çevirisini yazınız..."></td>

        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><input type="text" name="ex1" placeholder="Örnek yazınız..."></td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><input type="text" name="ex1t" placeholder="Örnek çevirisini yazınız..."></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><input type="text" name="ex2" placeholder="Örnek yazınız..."></td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><input type="text" name="ex2t" placeholder="Örnek çevirisini yazınız..."></td>
        </tr>
    </table>
</div>
</form>
</body>
</html>
