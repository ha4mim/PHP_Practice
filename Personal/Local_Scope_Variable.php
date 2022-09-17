<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Scope Variable</title>
</head>
<body>
<?php
function localScope(){
    $name="Sheikh Hamim Mahmud";
    echo "<p>My Name Is: $name";//local variable called
}
localScope();
echo "<p>My Name Is: $name";//will give an error

?>
</body>
</html>