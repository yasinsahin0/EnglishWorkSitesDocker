<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Present Simple</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/Engtime.css">
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
            <li><a href="simple.php">Simple</a></li>
            <li><a href="progressive.php">Progressive</a></li>
            <li><a href="perfect.php">Perfect</a></li>
            <li><a href="perfectprogressive.php">Perfect Progressive</a></li>
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
            <li><a href="../php/rnd_game_regular.php">Regular Verb</a></li>
            <li><a href="#">İrRegular Verb</a></li>
            <li><a href="#">Every Day Word</a></li>
        </ul>
    </li>
</ul>
<div id="ortametin">
    <h1>Present Simple Tense</h1>
    <h2>Geniş Zaman</h2>

    <h3>Olumlu Cümle</h3>
    <p id="acıklama">
        <b>I, You, We, They</b> öznelerinde fiil hiçbir ek almaz.</br></br>
        <b>He, She, It</b> yani 3.tekil öznelerinde fiile ‘-s’ takısı gelir.</br>
    </p>
    <p id="dikkat">Subject + Verb + Object / Özne + Yüklem + Nesne</p>
    <table align="center">
        <tr>
            <td>ÖZNE / SUBJECT</td>
            <td>FİİL / VERB</td>
            <td>NESNE / OBJECT</td>
        </tr>
        <tr>
            <td>I</br>you</br>we</br>they</td>
            <td>feed</td>
            <td>cats</td>
        </tr>
        <tr>
            <td>he</br>she</br>it</td>
            <td>feed<red>s</red></td>
            <td>cats</td>
        </tr>
    </table>
    <p id="acıklama">Normal fiiller sadece <b>-s</b> takısı alırlar.</p>
    <p id="acıklama">Sonu <b>-y</b> harfi ile biten fiillerde -y harfi düşerek yerine <b>-ies</b> takısı gelir.</p>
    <p id="acıklama">Sonu <b>-ch, -ss, -sh, -o</b> harfi ile biten fiillerde <b>-es</b> takısı gelir.</p>



    <h3>Olumsuz Cümle</h3>
    <p id="acıklama">
        <b>I, You,We, They, He, She, It</b> öznelerinde fiil hiçbir ek almaz.</br></br>
        <b>I, You,We, They</b> öznelerinden sonra <b>don’t</b> kelimesi eklenip ardından fiil gelir.</br></br>
        <b>He, She, It</b> öznelerinden sonra <b>doesn’t</b> kelimesi eklenip ardından fiil gelir.</br></br>
    </p>
    <p id="dikkat">Subject + Do/Does + Verb + Object / Özne + Do/Does + Yüklem + Nesne</p>
    <table align="center">
        <tr>
            <td>Özne / Subject</td>
            <td>Yardımcı Fiil / Auxiliary Verbs</td>
            <td>Fiil / Verb</td>
            <td>Nesne / Object</td>
        </tr>
        <tr>
            <td>I</br>you</br>we</br>they</td>
            <td>don't (do not)</td>
            <td>feed</td>
            <td>cats</td>
        </tr>
        <tr>
            <td>he</br>she</br>it</td>
            <td>doesn't (does not)</td>
            <td>feed</td>
            <td>cats</td>
        </tr>
    </table>


    <h3>Soru Cümlesi</h3>
    <p id="acıklama">
        <b>Hiçbir öznede fiil ek almaz.</b> </br></br>
    </p>
    <p id="dikkat">Do/Does + Subject + Verb + Object? / Do/Does + Özne + Yüklem + Nesne?</p>
    <table align="center">
        <tr>
            <td>Yardımcı Fiil / Auxiliary Verbs</td>
            <td>Özne / Subject</td>
            <td>Fiil / Verb</td>
            <td>Nesne / Object</td>
        </tr>
        <tr>
            <td>Do</td>
            <td>I</br>you</br>we</br>they</td>
            <td>feed</td>
            <td>cats ?</td>
        </tr>
        <tr>
            <td>Does</td>
            <td>he</br>she</br>it</td>
            <td>feed</td>
            <td>cats ?</td>
        </tr>
    </table>
    </br></br></br>
</div>
</body>
</html>