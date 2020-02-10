<!DOCTYPE html>
<html>
<head>
    <title>Error Handling</title>
</head>

<?php

class customException extends Exception {
    public function errorMessage(){
        // error message
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
        . ': <b>' . $this->getMessage() . '</b> is not a valid email address!';
        return $errorMsg;
    }
}


// if(!file_exists("welcome.txt")){
//     echo "File does not exist!";
// } else {
//     $file = fopen("welcome.txt", "r");
// }

// // set error function
// function customError($errno, $errstr) {
//     echo "<br>Error:</br> [$errno] $errstr<br>";
//     echo "Webmaster has been notified";
//     error_log("Error: [$errno] $errstr", 1,"obengjohnsonboateng@gmail.com", "From: webmaster@example.com");
// }

// // set error handler
// set_error_handler("customError", E_USER_WARNING);

// // trigger error
// $test = 2;
// if($test > 1) {
//     trigger_error("Value must be 1 or below!", E_USER_WARNING);
// }

// Exception handling
// function checkNum($number) {
//     if($number > 1) {
//         throw new Exception("Value must be 1 or below");
//     }
//     return true;
// }

// // trigger exception in a try block
// try{
//     checkNum(2);
//     echo "If I see this, the number is 1 or below!";
// } catch(Exception $e) {
//     echo "Message: " . $e->getMessage();
// }

$email = 'someone@example...com';

try {
    try {
        // if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //     throw new customException($email);
        // }
    
        if(strpos($email, "example") !== FALSE){
            throw new Exception($email);
        }
    } catch(Exception $e) {
        throw new customException($email);
    }
    // catch(Exception $e) {
    //     echo $e->getMessage();
    // }
}
catch(customException $e){
    echo $e->errorMessage();
}

function myException($exception){
    echo "<br>Exception</b> " . $exception->getMessage();
}

set_exception_handler("myException");

throw new Exception("Uncaught exception occurred!");

?>

<body>
    
</body>
</html>