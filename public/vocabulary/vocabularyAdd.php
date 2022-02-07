<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vocabulary Add</title>
    <link rel="stylesheet" href="../css/responsive_table.css">
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
                            <li><a href="../nouns/rnd_nouns.php">Nouns</a></li>
                            <li><a href="../nouns/nounsAdd.php">Add Nouns</a></li>
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
                            <li><a href="../adjectives/rnd_adjectives.php">Adjectives</a></li>
                            <li><a href="../adjectives/adjectivesAdd.php">Add Adjectives</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Vocabulary</a>
                        <ul class="sub-sub">
                            <li><a href="rnd_vocabulary.php">Vocabulary</a></li>
                            <li><a href="vocabularyAdd.php">Add Vocabulary</a></li>
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
                            <li><a href="../tech-Technical/techWordAdd.php">Add Words</a></li>
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
    <table>
        <form action="control_vocabulary.php" method="post" enctype="multipart/form-data">
            <caption>Vocabulary Control</caption>
            <thead>
            <tr>
                <th scope="col">Vocabulary</th>
                <th scope="col">Control</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Vocabulary"><input type="text" name="vocabulary"></td>
                <td data-label="Control"><input type="submit" name="gonder" id="refresh" value=""></td>
                <td data-label="Translate">
                    <?php
                    if($_SESSION['controlvocabulary'] =="var"):
                        echo "<img src='../image/onay.png'>";
                    else:
                        echo "<img src='../image/hata.png'>";
                    endif;
                    ?>
                </td>
            </tr>
            </tbody>
        </form>
    </table>
</div>

<div id="container">
    <table>
        <form action="add_vocabulary.php" method="post" enctype="multipart/form-data">
            <caption>Vocabulary Add</caption>
            <thead>
            <tr>
                <th scope="col">Vocabulary</th>
                <th scope="col">Translate</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Vocabulary"><input type="text" name="vocabulary" placeholder="Kelimeyi yazınız..."></td>
                <td data-label="Translate"><input type="text" name="translate" placeholder="Çevirisini yazınız..."></td>

            </tr>
            <thead>
            <tr>
                <th scope="col">Example</th>
                <th scope="col">Example Translate</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Example"><input type="text" name="ex1" placeholder="Örnek 1"></td>
                <td data-label="Example Translate"><input type="text" name="ex1t" placeholder="Örnek 1 Çevirisi"></td>
            </tr>


            <tr>
                <td data-label="Example">
                    <?php
                    if($_SESSION['addVocabulary'] =="ok"):
                        echo "<img src='../image/onay.png'>";
                    else:
                        echo "<img src='../image/hata.png'>";
                    endif;
                    ?>
                </td>
                <td data-label="Example Translate"><input type="submit" name="gonder" id="add" value=""></td>
            </tr>
            </tbody>
        </form>
    </table>
</div>


</body>
</html>
