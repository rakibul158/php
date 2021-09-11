<!DOCTYPE html>
<?php
    $cookiesName = "user";
    $cookiesValue = "rakibul158";
    setcookie($cookiesName, $cookiesValue, time() + (86400 * 30), "/");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookiesName]))
        {
            echo "Cookies named '" . $cookiesName. "' is not Set";
        }else{
            echo "Cookie '" . $cookiesName . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookiesName];
        }
    ?>
</body>
</html>
