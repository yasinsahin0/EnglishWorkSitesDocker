<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/button.css">
</head>
<body>
<ul class="menu cf">
    <li><a href="index.php">Ana Sayfa</a></li>
    <li>
        <a href="">VERB</a>
        <ul class="submenu">
            <li><a href="PHP_randomregularverb.php">Regular verbs</a></li>
            <li><a href="PHP_randomirregularverb.php">İrregular verbs</a></li>
            <li><a href="HTML_addVerb.php">Add Verb</a></li>

        </ul>
    </li>

    <li>
        <a href="">Menu item</a>
        <ul class="submenu">
            <li><a href="">Submenu item</a></li>
            <li><a href="">Submenu item</a></li>
            <li><a href="">Submenu item</a></li>
            <li><a href="">Submenu item</a></li>
        </ul>
    </li>

    <li>
        <a href="">Menu item</a>
        <ul class="submenu">
            <li><a href="">Submenu item</a></li>
            <li><a href="">Submenu item</a></li>
            <li><a href="">Submenu item</a></li>
            <li><a href="">Submenu item</a></li>
        </ul>
    </li>
</ul>
<h1>ADD VERBS</h1>

<div id="container">
    <table id="table3">
        <form action="PHP_controlverb.php" method="post" enctype="multipart/form-data">
            <tr>
                <td id="tanım">Fiil Kontrol</td>
                <td id="ortala"><input type="text" name="verb"></td>
                <td><input type="submit" name="gonder" value="Kontrol"></td>
            </tr>
            <tr>
                <td></td>
                <td id="ortala"><?php echo $_SESSION['controlverb']?></td>
                <td></td>
            </tr>
        </form>
    </table>

</div>
<div id="container">

    <table id="table4">
        <form action="PHP_addVerb.php" method="post" enctype="multipart/form-data">
        <tr>
            <td id="tanım4">VERB 1</td>
            <td><input type="text" name="verb1" placeholder="1. Hali"></td>
        </tr>
        <tr>
            <td id="tanım4">VERB 2</td>
            <td><input type="text" name="verb2" placeholder="2. Hali"></td>
        </tr>
        <tr>
            <td id="tanım4">VERB 3</td>
            <td><input type="text" name="verb3" placeholder="3. Hali"></td>
        </tr>
        <tr>
            <td id="tanım4">TRANSLATE</td>
            <td><input type="text" name="translate" placeholder="Çevirisi"></td>
        </tr>
        <tr>
            <td id="tanım4">TYPE </td>
            <td><input type="text" name="verbtype" placeholder="regular or irregular"></td>
        </tr>
        <tr>
            <td id="tanım4">EXAMPLE 1</td>
            <td><input type="text" name="ex1" placeholder="Örnek 1"></td>
        </tr>
        <tr>
            <td id="tanım4">EXAMPLE 1</td>
            <td><input type="text" name="ex1t" placeholder="Örnek 1 Çevirisi"></td>
        </tr>
        <tr>
            <td id="tanım4">EXAMPLE 2</td>
            <td><input type="text" name="ex2" placeholder="Örnek 2"></td>
        </tr>
        <tr>
            <td id="tanım4">EXAMPLE 2</td>
            <td><input type="text" name="ex2t" placeholder="Örnek 2 Çevirisi"></td>
        </tr>
        <tr>
            <td id="tanım4">EXPLANATİON</td>
            <td><input type="text" name="exp" placeholder="Açıklama"></td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['addverb']?></td>
            <td><input type="submit" name="gonder" value="Gonder"></td>
        </tr>
        </form>
    </table>

</div>

</body>
</html>