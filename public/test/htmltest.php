<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>html test</title>
</head>
<body>
<form action="phptest.php" method="post" enctype="multipart/form-data">
<select name="cars" id="cars">
    <option value="volvo" name="volvo">Volvo</option>
    <option value="saab" name="saab">Saab</option>
</select>
    <input type="submit" value="gonder">
</form>

</body>
</html>