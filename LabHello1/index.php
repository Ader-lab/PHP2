<?php
// echo "*",$_POST["txtUserName"],"*";

session_start();                             //要使用session都必須呼叫session_start()
$errTXT = "";
$Email = "";
if($_POST['btnOK']){  						//session是讓瀏覽器先記錄資料
	$Email = $_POST['txtUserEmail'];
	if($_POST['txtUserName'] === ""){
		$errTXT = "姓名不能是空的";
	}else{
		$_SESSION["userName"] = $_POST['txtUserName'];   //把post的資料存在SESSION陣列
		header("location: hello.php");                  
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>A Form</title>
</head>
<body>
	<form method="post" action="index.php">
		Your name: <input type="text" name="txtUserName" />
		<br>
		EMail: <input type="text" name="txtUserEmail" value="<?= $Email ?>"/>
		<input type="submit" name="btnOK" value="OK" />
		<br>
		<?= $errTXT ?>
	</form>



</body>
</html>