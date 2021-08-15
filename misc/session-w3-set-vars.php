<?php
// Start the session
session_start();
echo <<<_END
<!DOCTYPE html>
<html lang="en">
<body>
_END;
?>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
echo ' <a href="https://luknerclinic.net/session-w3-retrieve-vars.php">Visit Vars Retrieve</a> ';
echo <<<_END
</body>
</html> 
_END;
?>