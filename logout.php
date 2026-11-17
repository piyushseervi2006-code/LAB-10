
<?php
session_start();
session_destroy();

echo "You have successfully logged out.";
echo "<br><a href='index.html'>Login Again</a>";
?>
