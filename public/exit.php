<?php
session_start();
session_destroy();
session_unset();
echo'<meta http-equiv="refresh" content="0;URL=index.php">';