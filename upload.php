<?php


// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// check if image file is a real image or not
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // check if file already exists
    if(file_exists($target_file)){
        echo "Sorry, file already exist!";
        $uploadOk = 0;
    }

    // check file size
    if(filesize($_FILES["fileToUpload"]["size"] > 5000000)){
        echo "Sorry, your file is too large!";
        $uploadOk = 0;
    }

    // allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"){
            echo "Sorry, only JPG, JPEG, PNG & GIF are allowed!";
            $uploadOk = 0;
    }

    // check if uplaodOk is set to 0 by an error
    if($uploadOk == 0){
        echo "Sorry, your file was not uploaded!";
        // try to upload the file if everything is ok
    } else {
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded!";
        } else {
            echo "Sorry, there was an error uploading your file!";
        }
    }

    if(empty($_POST["name"])){
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"]. "\n";
        if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $nameErr = "Only letters and whitespace allowed";
        }
    }

    // $itemFile = fopen("itemNames.txt", 'a');
    
    // $imageFile = fopen("imageNames.txt", 'a');
    $imgName = $_FILES["fileToUpload"]["name"]."\n";
    // fwrite($itemFile, $name);
    // fwrite($imageFile, $imgName);
    // fclose($itemFile);
    // fclose($imageFile);

    
    // $sql = "INSERT INTO LostItems(item_name, img_name)
    //     VALUES ($name, $imgName)";

    // if($conn->query($sql) === TRUE) {
    //     echo "Item added to record successfully!, great work!!";
    // } else {
    //     echo "Lela awu!!!:" . $conn->error;
    // }

    // preparing and binding
    $stmt = $conn->prepare("INSERT INTO LostItems(item_name, img_name) VALUES (?,?)");
    $stmt->bind_param("ss", $itemName, $imageName);

     // set parameters and execute
    $itemName = $name;
    $imageName = $imgName;
    $stmt->execute();

}

?>