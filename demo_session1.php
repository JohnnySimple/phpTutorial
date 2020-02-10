<?php
// starting session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>demo session1</title>
</head>
<body>
    <?php
    // set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set";
    ?>
</body>
</html>