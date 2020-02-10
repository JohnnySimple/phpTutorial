<?php
    setcookie("test", "Test", time() + 20, "/");
?>
<html>
    <head>
        <title>Cookies</title>
    </head>
<body>
    <?php 
        if(count($_COOKIE) > 0){
            echo "Cookies are enabled!";
        } else {
            echo "Cookies are disabled";
        }
    ?>
</body>
</html>