<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adjectives Add</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/image.css">
    <script src="../css/script.js"></script>
</head>
<body>
<header>
    <nav>
        <div id="nav-toggle" onclick="toggle()">Menü</div>
        <ul id="nav-ul">
            <li><a href="../index.php">Home</a></li>
            <!-- sub menu -->
            <li class="dropdown">
                <a href="#">General</a>
                <ul>
                    <li>
                        <a href="#">Nouns</a>
                        <ul class="sub-sub">
                            <li><a href="../nouns/nouns.php">Nouns</a></li>
                            <li><a href="../nouns/rnd_nouns.php">Add Nouns</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Verb</a>
                        <ul class="sub-sub">
                            <li><a href="../verb/rnd_regular_verb.php">Regular verbs</a></li>
                            <li><a href="../verb/rnd_irregular_verb.php">İrregular verbs</a></li>
                            <li><a href="../verb/verbAdd.php">Add verbs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Adjectives</a>
                        <ul class="sub-sub">
                            <li><a href="adjectives.php">Adjectives</a></li>
                            <li><a href="adjectivesAdd.php">Add Adjectives</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Vocabulary</a>
                        <ul class="sub-sub">
                            <li><a href="../vocabulary/rnd_vocabulary.php">Vocabulary</a></li>
                            <li><a href="../vocabulary/vocabularyAdd.php">Add Vocabulary</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- #sub menu -->
            <li class="dropdown">
                <a href="#">ALL</a>
                <ul>
                    <li>
                        <a href="#">Technology Technical </a>
                        <ul class="sub-sub">
                            <li><a href="../tech-Technical/rnd_tech_word.php">Words</a></li>
                            <li><a href="../tech-Technical/rnd_tech_paragraph.php">Paragraph</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Every Day</a>
                        <ul class="sub-sub">
                            <li><a href="../everyDay/rnd_everyday_word.php">Words</a></li>
                            <li><a href="../everyDay/rnd_everyday_dialog.php">Dialogue</a></li>
                            <li><a href="../everyDay/rnd_everyday_paragraph.php">Paragraph</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- #sub menu -->
            <li class="dropdown">
                <a href="#">TENSE</a>
                <ul>
                    <li>
                        <a href="#">Present</a>
                        <ul class="sub-sub">
                            <li><a href="../present/simple.php">Simple</a></li>
                            <li><a href="../present/progressive.php">Progressive</a></li>
                            <li><a href="../present/perfect.php">Perfect</a></li>
                            <li><a href="../present/perfectprogressive.php">Perfect Progressive</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Past</a>
                        <ul class="sub-sub">
                            <li><a href="../past/simple.php">Simple</a></li>
                            <li><a href="../past/progressive.php">Progressive</a></li>
                            <li><a href="../past/perfect.php">Perfect</a></li>
                            <li><a href="../past/perfectprogressive.php">Perfect Progressive</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Future</a>
                        <ul class="sub-sub">
                            <li><a href="../future/simple.php">Simple</a></li>
                            <li><a href="../future/progressive.php">Progressive</a></li>
                            <li><a href="../future/perfect.php">Perfect</a></li>
                            <li><a href="../future/perfectprogressive.php">Perfect Progressive</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">GAME</a>
                <ul>
                    <li><a href="../game/rnd_game_nouns.php">Nouns</a></li>
                    <li><a href="../game/rnd_game_regular.php">Regular Verb</a></li>
                    <li><a href="../game/rnd_game_irregular.php">İrregular Verb</a></li>
                    <li><a href="../game/rnd_game_adjectives.php">Adjectives</a></li>
                    <li><a href="../game/rnd_game_vocabulary.php">Vocabulary</a></li>
                    <li><a href="../game/rnd_game_tense.php">Tense</a></li>
                </ul>
            </li>
        </ul>
        <div id="nav-toggle-alt" onclick="toggle()">X</div>
    </nav>
</header>
<div id="container">
    <table id="table">
        <form action="control_adjectives.php" method="post" enctype="multipart/form-data">
            <tr>
                <td id="tanım">Adjectives Control :</td>
                <td id="tanım2"><input type="text" name="adjectives"></td>
                <td id="tanım3"><input type="submit" name="gonder" id="refresh" value=""></td>
                <td id="tanım4">
                    <?php
                    if($_SESSION['controladjectives'] =="var"):
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
<form action="add_adjectives.php" method="post" enctype="multipart/form-data">
<div id="container">
    <table id="table4">
        <tr>
            <td id="tanım">Adjectives :</td>
            <td id="tanım5"><input type="text" name="adjectives" placeholder="Kelimeyi yazınız..."></td>

            <td rowspan="2" id="tanım6">
                <?php
                if($_SESSION['addAdjectives'] =="ok"):
                    echo "<img src='../image/onay.png'>";
                else:
                    echo "<img src='../image/hata.png'>";
                endif;
                ?>
            </td>
        </tr>
        <tr>
            <td id="tanım">Translate :</td>
            <td id="tanım5"><input type="text" name="translate" placeholder="Çevirisini yazınız..."></td>

        </tr>
        <tr>
            <td id="tanım8">Example :</td>
            <td id="tanım7"><input type="text" name="ex1" placeholder="Örnek yazınız..."></td>
            <td rowspan="2" id="tanım6">
                <input type="submit" name="gonder" id="add" value="">
            </td>
        </tr>
        <tr>
            <td id="tanım8">Example Translate :</td>
            <td id="tanım7"><input type="text" name="ex1t" placeholder="Örnek çevirisini yazınız..."></td>
        </tr>
    </table>
</div>


</form>
</body>
</html>
