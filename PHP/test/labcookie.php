<?php

if(isset($_POST["writeCookie"])) {
    $data = $_POST["data"];
    //第一個參數是自訂義名稱 第二是資料 //第三是COOKIE的存活時間,沒有寫就是關掉瀏覽器之前
    setcookie("myCookie",$data,time()+60*60*24);  //time()是拿到現在的時間戳記
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