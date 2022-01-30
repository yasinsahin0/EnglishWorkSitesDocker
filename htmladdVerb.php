<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="signup-header">
        Fiil Kontrol
    </div>
    <div class="signup-header">
        <?php echo $_SESSION['controlverb']?>
    </div>
    <form action="controlverb.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <p>Verb :</p>
            <input type="text" name="verb">
        </div>
        <div class="button-container">
            <input type="submit" name="gonder" value="Kontrol">
        </div>
    </form>
    <br>
    <div class="signup-header">
        Fiil Kaydet
    </div>
    <form action="addVerb.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <p>Verb 1 :</p>
            <input type="text" name="verb1">
        </div>
        <div class="row">
            <p>Verb 2 :</p>
            <input type="text" name="verb2">
        </div>
        <div class="row">
            <p>Verb 3 :</p>
            <input type="text" name="verb3">
        </div>
        <div class="row">
            <p>Translate :</p>
            <input type="text" name="translate">
        </div>
        <div class="row">
            <p>Verb Type (regular or irregular):</p>
            <input type="text" name="verbtype">
        </div>
        <div class="row">
            <p>Explanation :</p>
            <input type="text" name="exp">
        </div>
        <div class="button-container">
            <input type="submit" name="gonder" value="Gonder">
        </div>
    </form>

</div>
</body>
</html>