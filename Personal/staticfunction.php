<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Function</title>
</head>
<body>
<?php
    /*
    Static keyword keep the value of a variable after calling the function
    */
    function staticFunction(){
        static $number = 9;
        echo $number;
        $number--;
    }
    staticFunction();
    echo "<br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";
    staticFunction();
    echo "</br>";//The value of number will dicrise untill stop calling the function
?>
</body>
</html>