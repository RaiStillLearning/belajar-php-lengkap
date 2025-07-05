<?php
if(isset($_COOKIE['email'])){
    echo "Welcome back, " . htmlspecialchars($_COOKIE['email']) . "!";
} else {
    echo "Welcome, Guest!";
}
echo '<a href="index.php">Go back to login</a>';



?>