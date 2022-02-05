<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="responsive_table.css">
    <link rel="stylesheet" href="../css/button.css">
</head>
<body>
<div id="container">
    <table>
        <caption>Regular Verb</caption>
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
                <td data-label="Verb"><?php echo $_SESSION['re_verb1'];?></td>
                <td data-label="Verb 2"><?php echo $_SESSION['re_verb2'];?></td>
                <td data-label="Verb 3"><?php echo $_SESSION['re_verb3'];?></td>
                <td data-label="Translate"><?php echo $_SESSION['re_translate'];?></td>
            </tr>
        </tbody>
    </table>
</div>

<div id="container">
    <table>
        <caption>Regular Verb Example</caption>
        <thead>
        <tr>
            <th scope="col">Example</th>
            <th scope="col">Example Translate</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-label="Example"><?php echo $_SESSION['re_ex1'];?></td>
            <td data-label="Example Translate"><?php echo $_SESSION['re_ex1t'];?></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <td data-label="Example"><?php echo $_SESSION['re_ex2'];?></td>
            <td data-label="Example Translate"><?php echo $_SESSION['re_ex2t'];?></td>
        </tr>
        </tbody>
        <tbody>
        <tr>
            <td data-label="Example"><?php echo $_SESSION['re_ex3'];?></td>
            <td data-label="Example Translate"><?php echo $_SESSION['re_ex3t'];?></td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>

