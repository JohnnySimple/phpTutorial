<!DOCTYPE html>
<html>
<head>
    <title>PHP Databases</title>
</head>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Connection faild: " . $conn->connect_error);
    }

    // create databae myDB
    // $sql = "CREATE DATABASE testDB";
    // if($conn->query($sql) === TRUE) {
    //     echo "Database 'testDB' created successfully!";
    // } else {
    //     echo "Error creating database:" . $conn->error;
    // }
    
    // sql to create table
    // $sql = "CREATE TABLE MyGuests(
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP
    // )";

    // insert into database
    // $sql = "INSERT INTO MyGuests(firstname, lastname, email)
    // VALUES ('Johnny', 'Simple', 'jsimple@gmail.com')";

    // if($conn->query($sql) === TRUE) {
    //     echo "New record created successfully!";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error ;
    // }

    // preparing and binding
    // $stmt = $conn->prepare("INSERT INTO MyGuests(firstname, lastname, email) VALUES (?,?,?)");
    // $stmt->bind_param("sss", $firstname, $lastname, $email);

    // // set parameters and execute
    // $firstname = "Charles";
    // $lastname = "Obeng";
    // $email = "cobeng@gmail.com";
    // $stmt->execute();

    // $firstname = "Jefferson";
    // $lastname = "Obeng";
    // $email = "jeffersonobeng@gmail.com";
    // $stmt->execute();

    // echo "New records created successfully!";

    // $stmt->close();

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $results = $conn->query($sql);
    if($results->num_rows > 0) {
        while($row = $results->fetch_assoc()) {
            echo "id: " . $row["id"] . " Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    // deleting data
    // $delData = "DELETE FROM MyGuests WHERE id=2";
    // $conn->query($delData);

    $conn->close();

?>

<body>
    
</body>
</html>