<?php
session_start();
echo <<<_END
<!DOCTYPE html>
<html lang="en">
<body>
_END;
?>
<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";

echo <<<_END
</body>
</html> 
_END;
?>
