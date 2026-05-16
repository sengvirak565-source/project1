<?php
session_start();
require 'header.php';

if (isset($_SESSION['user'])) {
    echo "<h2>Welcome " . $_SESSION['user'] . "</h2>";
} else {
    echo "<h2>Please login</h2>";
}
?>

<a href="login.php">Login</a>

<?php require 'footer.php'; ?>