<?php
session_start();
if($_SESSION['email']) {
    echo "Welcome back, " . htmlspecialchars($_SESSION['email']) . "!";
} else {
    echo "Welcome, Guest!";
}
echo '<a href="index.php">Go back to login</a>';



?>