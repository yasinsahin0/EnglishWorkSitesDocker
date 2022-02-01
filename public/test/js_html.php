<?php
?>
<html>
<head>
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
<script>
    "use strict";
    var tablo = document.createElement("menu cf");

    var satir = document.createElement("li");
    var sutun = document.createElement("ul");
    sutun.innerHTML = <a href="index.php">Ana Sayfa</a>;

    satir.appendChild(sutun);
    tablo.appendChild(satir);

    document.body.appendChild(tablo);
</script>
</body>
</html>
