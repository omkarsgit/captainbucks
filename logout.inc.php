<?php

session_start();
session_unset();
session_destroy();

echo '<script language="javascript">';
echo 'window.location.href = "index.php"';
echo '</script>';


?>