<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Scop Variable</title>
</head>
<body>
    <?php
    /*
    Global Scope Function declired outside a function and can by only used outside the function
    */
    $name = "Sheikh Hamim Mahmud";//Dicliaring Global Variable
    function gobalScope(){
        global $name;//making variable globle
        echo "<p>My Name is: $name </p>";//Will give an error
    }
    gobalScope();
    echo "<p?>My Name is: $name </p>";//Global scope function called & will give an output
    $f_name="Hamim";
    $l_name="Mahmud";
    function globalScope(){
        echo "My Name Is ".$GLOBALS['f_name']." ".$GLOBALS['l_name'];
    }
    globalScope();
    ?>
</body>
</html>