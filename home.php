<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery1.js"></script>

<body>
    <div align="center"><h2>Lost Items</h2></div>
    
    <div class="container">
        <?php 
            $myfile = fopen("imageNames.txt", 'r');
            $items = fopen("itemNames.txt", 'r');
            while(!feof($myfile) && !feof($items)){
                $fname = fgets($myfile);
                $iname = fgets($items);
                echo "<div class='col-md-3' style='margin-top:50px'>
                    <img id='imgs' width='200px' height='200px' src='uploads/$fname' />
                    <h4>$iname</h4>
                </div>";
            }
            fclose($myfile);
        ?>
    </div>
    
</body>
</html>