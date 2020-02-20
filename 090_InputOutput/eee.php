<?php

if($_POST['btnOK']){
    echo $_FILES ["file1"]["name"];
	move_uploaded_file ( $_FILES["file1"]["tmp_name"],"./aa/".$_FILES["file1"]["name"] );
    
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
    <form method="post" enctype="multipart/form-data" action="">
    1. Select a file：<input type="file" name="file1" />
    <br/> 
    <input type="submit" name="btnOK" value="2. 送出資料" />



    </form>
    
</body>
</html>