
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $age = (int) $_POST["age"];

    if ($age >= 18) {
        echo "<h2>You are eligible.</h2>";
    } else {
        echo "<h2>You are not eligible.</h2>";
    }
}
?>

