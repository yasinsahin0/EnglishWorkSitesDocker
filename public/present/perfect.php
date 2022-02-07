<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Present Perfect Tense</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/image.css">
    <link rel="stylesheet" href="../css/Engtime.css">
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
                            <li><a href="simple.php">Simple</a></li>
                            <li><a href="progressive.php">Progressive</a></li>
                            <li><a href="perfect.php">Perfect</a></li>
                            <li><a href="perfectprogressive.php">Perfect Progressive</a></li>
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
<div id="ortametin">
    <h1>Present Perfect Tense</h1>
    <h2>Yakın Geçmiş Zaman</h2>

    <h3>Olumlu Cümle</h3>
    <p id="acıklama">
        Fiilin 3.hali kullanılır.</br>
    </p>
    <p id="dikkat">Özne + Yardımcı Fiil (have, has) + Fiil 3.hali + Nesne</p>
    <table align="center">
        <tr>
            <td>Özne / Subject</td>
            <td>Yardımcı fiil / Aux. Verb</td>
            <td>Fiil / Verb</td>
            <td>Nesne / Object</td>
        </tr>
        <tr>
            <td>I</br>you</br>we</br>they</td>
            <td>have</td>
            <td>accept<red>ed</red></td>
            <td>job</td>
        </tr>
        <tr>
            <td>he</br>she</br>it</td>
            <td>has</td>
            <td>allow<red>ed</red></td>
            <td>tom</td>
        </tr>
    </table>


    <h3>Olumsuz Cümle</h3>
    <p id="acıklama">
        Fiilin 3.hali kullanılır.</br>
    </p>
    <p id="dikkat">Özne + Yardımcı Fiil (have not, has not) + Fiil 3.hali + Nesne</p>
    <table align="center">
        <tr>
            <td>Özne / Subject</td>
            <td>Yardımcı fiil / Aux. Verb</td>
            <td>Fiil / Verb</td>
            <td>Nesne / Object</td>
        </tr>
        <tr>
            <td>I</br>you</br>we</br>they</td>
            <td>have<red> not</red></td>
            <td>accept<red>ed</red></td>
            <td>job</td>
        </tr>
        <tr>
            <td>he</br>she</br>it</td>
            <td>has <red> not</red></td>
            <td>allow<red>ed</red></td>
            <td>tom</td>
        </tr>
    </table>



    <h3>Soru Cümlesi</h3>
    <p id="acıklama">
        Fiilin 3.hali kullanılır.</br>
    </p>
    <p id="dikkat">Yardımcı Fiil (have, has) + Özne + Fiil 3.hali + Nesne</p>
    <table align="center">
        <tr>
            <td>Özne / Subject</td>
            <td>Yardımcı fiil / Aux. Verb</td>
            <td>Fiil / Verb</td>
            <td>Nesne / Object</td>
        </tr>
        <tr>
            <td>have</td>
            <td>I</br>you</br>we</br>they</td>
            <td>accept<red>ed</red></td>
            <td>job</td>
        </tr>
        <tr>
            <td>has</td>
            <td>he</br>she</br>it</td>
            <td>allow<red>ed</red></td>
            <td>tom</td>
        </tr>
    </table>
    </br></br></br>
    <h3>Since? Or For?</h3>
    <p id="acıklama">
        Hem “Since” Hem de “For” –den beri, -dan bu yana anlamı taşır, ancak kullanımlarında ufak farklılıklar bulunur. </br>
        Eğer cümlede 2001’den beri ya da 01.01.2001’den bu yana gibi net bir zaman belirtilmişse “since”, </br>
        2 yıldan bu yana ya da 3 aydan beri gibi belirli bir süreç ifade edilmişse “for” kullanılır.</br>
    </p>
    </br></br></br>
    <h3>Just, Yet, Already, Recently, So Far</h3>
    <p id="acıklama">
        Just: Henüz anlamında kullanılır. </br>
        Yet: Daha, henüz, hala anlamındadır. Genellikle olumsuz cümlelere eklenir ve cümlenin sonunda kullanılır.</br>
        Already: Eklendiği cümleye çoktan, uzun zaman önce, çok önce anlamı katar.</br>
        Recently: Son zamanlarda anlamı taşır.</br>
        So Far: Şimdiye kadar anlamına gelir.</br>
    </p>
    </br></br></br></br></br></br>
</div>
</body>
</html>