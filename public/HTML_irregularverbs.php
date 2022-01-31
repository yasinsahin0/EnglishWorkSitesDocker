<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>irregular</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/menu.css">
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


<div id="container">

    <table id="table">
        <tr>
            <td id="tanım">VERB 1</td>
            <td><?php echo $_SESSION['ir_verb1'];?></td>
        </tr>
        <tr>
            <td id="tanım">VERB 2</td>
            <td><?php echo $_SESSION['ir_verb2'];?></td>
        </tr>
        <tr>
            <td id="tanım">VERB 3</td>
            <td><?php echo $_SESSION['ir_verb3'];?></td>
            <td>
                <form action="PHP_randomirregularverb.php" method="post" enctype="multipart/form-data">
                    <input type="submit" name="gonder" value="Yeni">
                </form>
            </td>
        </tr>
        <tr>
            <td id="tanım">TRANSLATE</td>
            <td><?php echo $_SESSION['ir_translate'];?></td>
        </tr>
        <tr>
            <td id="tanım">TYPE</td>
            <td><?php echo $_SESSION['ir_type'];?></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım">EXAMPLE 1</td>
            <td><?php echo $_SESSION['ir_ex1'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXAMPLE 1 TRANSLATE</td>
            <td><?php echo $_SESSION['ir_ex1t'];?></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım">EXAMPLE 2</td>
            <td><?php echo $_SESSION['ir_ex2'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXAMPLE 2 TRANSLATE</td>
            <td><?php echo $_SESSION['ir_ex2t'];?></td>
        </tr>
    </table>
</div>
<div id="container">
    <table id="table2">
        <tr>
            <td id="tanım">EXAMPLE 3</td>
            <td><?php echo $_SESSION['ir_ex3'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXAMPLE 3 TRANSLATE</td>
            <td><?php echo $_SESSION['ir_ex3t'];?></td>
        </tr>
    </table>
</div>
</body>
</html>