<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <h1>Welcome to Page 2</h1>
    <?php
    // Check if the cookie "user" is set
    if (isset($_COOKIE["user"])) {
        echo "<p>Cookie Value: " . $_COOKIE["user"] . "</p>";
    } else {
        echo "<p>No cookie found!</p>";
    }
    ?>
    <a href="delete_cookie.php">Delete Cookie</a>
</body>
</html>
