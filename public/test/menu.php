<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vocabulary Add</title>
    <link rel="stylesheet" href="yeni_menu.css">
    <script src="script.js"></script>
</head>
<body>
<header>
    <nav>
        <div id="nav-toggle" onclick="toggle()">Menü</div>
        <ul id="nav-ul">
            <li><a href="#">Home</a></li>
            <!-- sub menu -->
            <li class="dropdown">
                <a href="#">General</a>
                <ul>
                    <li>
                        <a href="#">Nouns</a>
                        <ul class="sub-sub">
                            <li><a href="#">Nouns</a></li>
                            <li><a href="#">Add Nouns</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Verb</a>
                        <ul class="sub-sub">
                            <li><a href="#">Regular verbs</a></li>
                            <li><a href="#">İrregular verbs</a></li>
                            <li><a href="#">Add verbs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Adjectives</a>
                        <ul class="sub-sub">
                            <li><a href="#">Adjectives</a></li>
                            <li><a href="#">Add Adjectives</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Vocabulary</a>
                        <ul class="sub-sub">
                            <li><a href="#">Vocabulary</a></li>
                            <li><a href="#">Add Vocabulary</a></li>
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
                            <li><a href="#">Words</a></li>
                            <li><a href="#">Paragraph</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Every Day</a>
                        <ul class="sub-sub">
                            <li><a href="#">Words</a></li>
                            <li><a href="#">Dialogue</a></li>
                            <li><a href="#">Paragraph</a></li>
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
                            <li><a href="#">Simple</a></li>
                            <li><a href="#">Progressive</a></li>
                            <li><a href="#">Perfect</a></li>
                            <li><a href="#">Perfect Progressive</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Past</a>
                        <ul class="sub-sub">
                            <li><a href="#">Simple</a></li>
                            <li><a href="#">Progressive</a></li>
                            <li><a href="#">Perfect</a></li>
                            <li><a href="#">Perfect Progressive</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Future</a>
                        <ul class="sub-sub">
                            <li><a href="#">Simple</a></li>
                            <li><a href="#">Progressive</a></li>
                            <li><a href="#">Perfect</a></li>
                            <li><a href="#">Perfect Progressive</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">GAME</a>
                <ul>
                    <li><a href="#">Nouns</a></li>
                    <li><a href="#">Regular Verb</a></li>
                    <li><a href="#">İrregular Verb</a></li>
                    <li><a href="#">Adjectives</a></li>
                    <li><a href="#">Vocabulary</a></li>
                    <li><a href="#">Tense</a></li>
                </ul>
            </li>
        </ul>
        <div id="nav-toggle-alt" onclick="toggle()">X</div>
    </nav>
</header>

</body>
</html>
