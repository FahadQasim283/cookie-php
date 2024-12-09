<?php
session_start();

setcookie("user", "Babar", time() + 3600, "/");

echo "Cookie has been set! <a href='page1.php'>Go to Page 1</a>";
?>
