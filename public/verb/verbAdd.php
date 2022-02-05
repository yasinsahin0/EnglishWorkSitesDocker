<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verb Add</title>
    <link rel="stylesheet" href="../css/table.css">
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
                            <li><a href="../nouns/nouns.php">Nouns</a></li>
                            <li><a href="../nouns/rnd_nouns.php">Add Nouns</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Verb</a>
                        <ul class="sub-sub">
                            <li><a href="rnd_regular_verb.php">Regular verbs</a></li>
                            <li><a href="rnd_irregular_verb.php">İrregular verbs</a></li>
                            <li><a href="verbAdd.php">Add verbs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Adjectives</a>
                        <ul class="sub-sub">
                            <li><a href="../adjectives/adjectives.php">Adjectives</a></li>
                            <li><a href="../adjectives/adjectivesAdd.php">Add Adjectives</a></li>
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
    <table>
        <form action="control_verb.php" method="post" enctype="multipart/form-data">
        <caption>Verb Control</caption>
        <thead>
        <tr>
            <th scope="col">Verb</th>
            <th scope="col">Control</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
            <tbody>
            <tr>
                <td data-label="Verb"><input type="text" name="verb"></td>
                <td data-label="Control"><input type="submit" name="gonder" id="refresh" value=""></td>
                <td data-label="Translate">
                    <?php
                    if($_SESSION['controlverb'] =="var"):
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
        <form action="add_verb.php" method="post" enctype="multipart/form-data">
            <caption>Verb Add</caption>
            <thead>
            <tr>
                <th scope="col">Verb</th>
                <th scope="col">Verb 2</th>
                <th scope="col">Verb 3</th>
                <th scope="col">Translate</th>
                <th scope="col">Check</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Verb"><input type="text" name="verb1" placeholder="1. Hali"></td>
                <td data-label="Verb 2"><input type="text" name="verb2" placeholder="2. Hali"></td>
                <td data-label="Verb 3"><input type="text" name="verb3" placeholder="3. Hali"></td>
                <td data-label="Translate"><input type="text" name="translate" placeholder="Çevirisi"></td>
                <td id="tanım5">
                    <select name="verbtype" id="combo">
                        <option value="regular" name="regular">Regular</option>
                        <option value="irregular" name="irregular">İrregular</option>
                    </select>
                </td>
            </tr>
            <thead>
            <tr>
                <th scope="col" colspan="2">Example</th>
                <th scope="col" colspan="3">Example Translate</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Example" colspan="2"><input type="text" name="ex1" placeholder="Örnek 1"></td>
                <td data-label="Example Translate" colspan="3"><input type="text" name="ex1t" placeholder="Örnek 1 Çevirisi"></td>
            </tr>

            <tr>
                <td data-label="Example" colspan="2"><input type="text" name="ex2" placeholder="Örnek 2"></td>
                <td data-label="Example Translate" colspan="3"><input type="text" name="ex2t" placeholder="Örnek 2 Çevirisi"></td>
            </tr>

            <tr>
                <td data-label="Example" colspan="2"><input type="text" name="ex3" placeholder="Örnek 3"></td>
                <td data-label="Example Translate" colspan="3"><input type="text" name="ex3t" placeholder="Örnek 3 Çevirisi"></td>
            </tr>
            <tr>
                <td data-label="Status" colspan="2">
                    <?php
                        if($_SESSION['addverb'] =="ok"):
                            echo "<img src='../image/onay.png'>";
                        else:
                            echo "<img src='../image/hata.png'>";
                        endif;
                    ?>
                </td>
                <td data-label="Check" colspan="3"><input type="submit" name="gonder" id="add" value=""></td>
            </tr>
            </tbody>
        </form>
    </table>
</div>


</body>
</html>