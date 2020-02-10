<?php
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>demo session2</title>
</head>
<body>
    <?php
    // echo session variables creaed on previous page
    // echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    // echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    // print_r($_SESSION);

    // remove all session variables
    // session_unset();
    // destroy session
    // session_destroy();
    ?>
    <!-- <table>
        <tr>
            <td>Filter Name</td>
            <td>Fileter ID</td>
        </tr> -->
        <?php
        // foreach(filter_list() as $id => $filter){
        //     echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td><tr>';
        // }
        $str = 0;
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $str . "<br>" . $newstr . "<br>";

        if(filter_var($str, FILTER_VALIDATE_INT) === 0 || !filter_var($str, FILTER_VALIDATE_INT) === false){
            echo("Integer is valid!");
        } else {
            echo("Integer is invalid!");
        }
        ?>
    <!-- </table> -->
</body>
</html>