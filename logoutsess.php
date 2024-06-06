<?php
session_start();

session_unset(); // Unset all of the session variables

session_destroy();

echo "You have been logged out successfully.<br>";
echo "<a href='loginsess.php'>Login again</a>";
?>