<?php
// Delete the "user" cookie by setting its expiration time to the past
setcookie("user", "", time() - 3600, "/");

// Notify the user
echo "Cookie has been deleted! <a href='set_cookie.php'>Go back to set cookie</a>";
echo "<br><a href=page2.php>Go to Page 2</a>";
?>
