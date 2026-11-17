
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
}

if (isset($_SESSION["username"])) {
    echo "<h2>Welcome " . htmlspecialchars($_SESSION["username"]) . "</h2>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "Please login first.";
}
?>
