<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/irregularverbs.css">
</head>
<body>
<h1>İRREGULAR VERBS</h1>
<div id="container">
<form action="randomirregularverb.php" method="post" enctype="multipart/form-data">
    <input type="submit" name="gonder" value="Kontrol">
</form>
</div>
<div id="container">

    <table id="personel">
        <tr>
            <th>A</th>
            <th>EXPLANATİON</th>
        </tr>
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
        </tr>
        <tr>
            <td id="tanım">TRANSLATE</td>
            <td><?php echo $_SESSION['ir_translate'];?></td>
        </tr>
        <tr>
            <td id="tanım">TYPE</td>
            <td><?php echo $_SESSION['ir_type'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXAMPLE 1</td>
            <td><?php echo $_SESSION['ir_ex1'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXAMPLE 1</td>
            <td><?php echo $_SESSION['ir_ex1t'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXAMPLE 2</td>
            <td><?php echo $_SESSION['ir_ex2'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXAMPLE 2</td>
            <td><?php echo $_SESSION['ir_ex2t'];?></td>
        </tr>
        <tr>
            <td id="tanım">EXP</td>
            <td><?php echo $_SESSION['ir_exp'];?></td>
        </tr>
    </table>
</div>

</body>
</html>