<?php

session_start();

?>

<html lang="en">

<body>

<?php

$_SESSION["name"] = "Simplilearn";

echo "Information set in a variable.<br>";
echo ' <a href="session-retrieve-name.php">Visit Name Retrieve</a> ';

?>

</body>

</html>