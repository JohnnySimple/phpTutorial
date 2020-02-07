<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery1.js"></script>
<?php 
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
   
?>
<body>
   
    <div class="container" style="width:30%;margin-top:100px">
        <h1>Post your lost item</h1>
        <form class="form-group" action="upload.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br>
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Submit post" name="submit">
        </form>
    </div>
    <footer style="margin-top:150px">
        <?php require 'footer.php'; ?>
    </footer>
</body>
</html>