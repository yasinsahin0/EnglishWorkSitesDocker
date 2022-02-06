<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adjectives</title>
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
                            <li><a href="../adjectives/rnd_adjectives.php">Adjectives</a></li>
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
        <caption>Non-Regular Verb</caption>
        <thead>
        <tr>
            <th scope="col">Verb</th>
            <th scope="col">Verb 2</th>
            <th scope="col">Verb 3</th>
            <th scope="col">Translate</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-label="Verb"><?php echo $_SESSION['ir_verb1'];?></td>
            <td data-label="Verb 2"><?php echo $_SESSION['ir_verb2'];?></td>
            <td data-label="Verb 3"><?php echo $_SESSION['ir_verb3'];?></td>
            <td data-label="Translate"><?php echo $_SESSION['ir_translate'];?></td>
        </tr>
        </tbody>
    </table>
</div>

<div id="container">
    <table>
        <caption>Non-Regular Verb Example</caption>
        <thead>
        <tr>
            <th scope="col">Example</th>
            <th scope="col">Example Translate</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-label="Example"><?php echo $_SESSION['ir_ex1'];?></td>
            <td data-label="Example Translate"><?php echo $_SESSION['ir_ex1t'];?></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <td data-label="Example"><?php echo $_SESSION['ir_ex2'];?></td>
            <td data-label="Example Translate"><?php echo $_SESSION['ir_ex2t'];?></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <td data-label="Example"><?php echo $_SESSION['ir_ex3'];?></td>
            <td data-label="Example Translate"><?php echo $_SESSION['ir_ex3t'];?></td>
        </tr>
        </tbody>
    </table>
</div>
<div id="container">
    <form action="rnd_irregular_verb.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="gonder" id="refresh" value="">
    </form>
</div>
</body>
</html>