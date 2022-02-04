<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Verbs</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/button.css">
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
        <a>Present</a>
        <ul class="submenu">
            <li><a href="../present/simple.php">Simple</a></li>
            <li><a href="../present/progressive.php">Progressive</a></li>
            <li><a href="../present/perfect.php">Perfect</a></li>
            <li><a href="../present/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Past</a>
        <ul class="submenu">
            <li><a href="../past/simple.php">Simple</a></li>
            <li><a href="../past/progressive.php">Progressive</a></li>
            <li><a href="../past/perfect.php">Perfect</a></li>
            <li><a href="../past/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Future</a>
        <ul class="submenu">
            <li><a href="../future/simple.php">Simple</a></li>
            <li><a href="../future/progressive.php">Progressive</a></li>
            <li><a href="../future/perfect.php">Perfect</a></li>
            <li><a href="../future/perfectprogressive.php">Perfect Progressive</a></li>
        </ul>
    </li>
    <li>
        <a>Game</a>
        <ul class="submenu">
            <li><a href="../php/game_rnd_regular_verb.php">Regular Verb</a></li>
            <li><a href="#">İrRegular Verb</a></li>
            <li><a href="#">Every Day Word</a></li>
        </ul>
    </li>
</ul>


<div id="container">
    <table id="table">
        <form action="../php/control_verb.php" method="post" enctype="multipart/form-data">
            <tr>
                <td id="tanım">Fiil Kontrol :</td>
                <td id="tanım2"><input type="text" name="verb"></td>
                <td id="tanım3"><input type="submit" name="gonder" id="refresh" value=""></td>
                <td id="tanım4">
                    <?php
                        if($_SESSION['controlverb'] =="var"):
                            echo "<img src='../image/onay.png'>";
                        else:
                            echo "<img src='../image/hata.png'>";
                        endif;
                    ?>
                </td>
            </tr>
        </form>
    </table>
</div>

<div id="container">
    <table id="table4">
        <form action="../php/add_verb.php" method="post" enctype="multipart/form-data">
        <tr>
            <td id="tanım">Verb :</td>
            <td id="tanım9"><input type="text" name="verb1" placeholder="1. Hali"></td>
            <td id="tanım9"><input type="text" name="verb2" placeholder="2. Hali"></td>
            <td id="tanım9"><input type="text" name="verb3" placeholder="3. Hali"></td>
            <td rowspan="2" id="tanım6">
                <?php
                if($_SESSION['addverb'] =="ok"):
                    echo "<img src='../image/onay.png'>";
                else:
                    echo "<img src='../image/hata.png'>";
                endif;
                ?>
            </td>
        </tr>

        <tr>
            <td id="tanım">Translate :</td>
            <td id="tanım5" colspan="3"><input type="text" name="translate" placeholder="Çevirisi"></td>
        </tr>
        <tr>
            <td id="tanım">Type :</td>
            <td id="tanım5" colspan="3">
                <select name="verbtype" id="combo">
                    <option value="regular" name="regular">Regular</option>
                    <option value="irregular" name="irregular">İrregular</option>
                </select>
            </td>
            <td id="tanım6" rowspan="9"><input type="submit" name="gonder" id="add" value=""></td>
        </tr>
        <tr>
            <td id="tanım">Example :</td>
            <td id="tanım5" colspan="3"><input type="text" name="ex1" placeholder="Örnek 1"></td>
        </tr>
        <tr>
            <td id="tanım">Ex. Translate :</td>
            <td id="tanım5" colspan="3"><input type="text" name="ex1t" placeholder="Örnek 1 Çevirisi"></td>
        </tr>
        <tr>
            <td id="tanım">Example :</td>
            <td id="tanım5" colspan="3"><input type="text" name="ex2" placeholder="Örnek 2"></td>
        </tr>
        <tr>
            <td id="tanım">Ex. Translate :</td>
            <td id="tanım5" colspan="3"><input type="text" name="ex2t" placeholder="Örnek 2 Çevirisi"></td>
        </tr>
            <tr>
                <td id="tanım">Example :</td>
                <td id="tanım5" colspan="3"><input type="text" name="ex3" placeholder="Örnek 3"></td>
            </tr>
            <tr>
                <td id="tanım">Ex. Translate :</td>
                <td id="tanım5" colspan="3"><input type="text" name="ex3t" placeholder="Örnek 3 Çevirisi"></td>
            </tr>

        </form>
    </table>

</div>

</body>
</html>