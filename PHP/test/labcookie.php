<?php

if(isset($_POST["writeCookie"])) {
    echo "33333";
}
if(isset($_POST["readCookie"])) {
    echo "55555";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="data">
        <input type="submit" name="writeCookie" value="Write">
        <input type="submit" name="readCookie" value="Read">
    
    </form>
    
</body>
</html>