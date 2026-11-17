
<!DOCTYPE html>
<html>
<head>
    <title>Date and Time</title>
</head>
<body>

<h2>Current Date and Time</h2>

<?php
date_default_timezone_set("Asia/Kolkata");

echo "Date: " . date("d-m-Y");
echo "<br>";

echo "Time: " . date("h:i:s A");
echo "<br>";

echo "Day: " . date("l");
?>

</body>
</html>
