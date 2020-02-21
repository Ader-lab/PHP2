<?php
	//如果要用到SESSION功能 就一定要先打這個方兄
	//SESSION代表執行網頁的這段會期
	//靠每個不同電腦的瀏覽器幫忙紀錄資料
	session_start();

	$errormessage = "";
	$username = "";
	$eMail = "";

	//如果post btnOK為true
	if ($_POST["btnOK"]){
		$username = $_POST["txtUserName"];
		$eMail = $_POST["eMail"];
		if ($username == ""){
			$errormessage = "請輸入姓名";
		}else{
			$_SESSION["username"] = $_POST["txtUserName"];
			header("location: hello.php"); //轉址
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
		Email: <input type="text" name="eMail" value="<?= $eMail ?>" />
		<br>
		<input type="submit" name="btnOK" value="OK" />
		<br>
		<?= $errormessage ?>
	</form>
</body>
</html>