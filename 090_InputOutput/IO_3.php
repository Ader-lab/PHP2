<?php
if (isset ( $_POST ["btnOK"] )) {
	//processFile ( $_FILES ["file1"] );
	foreach ($_FILES["file1"] as $afile){
		processFile($afile);
	}
}
function processFile($objFile) {
	if ($objFile ["error"] != 0) {
		echo "Upload Fail! ";
		echo "<a href='javascript:window.history.back();'>Back</a>";
		return;
	}
	//被丟上來的時候會亂數產生一個tmp_name暫時檔名
	//,後面放存取位置+name使用者的原始檔名
	$test = move_uploaded_file ( $objFile ["tmp_name"], "./" . $objFile ["name"] );
	if (! $test) {
		die ( "move_uploaded_file() faile" );
	}
	
	echo "File uploaded<br />";
	echo "File name: " . $objFile ["name"] . "<br />";
	echo "File type: " . $objFile ["type"] . "<br />";
	echo "File size: " . $objFile ["size"] . "<br />";
	
	echo "--  Done --";
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab - Upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="">
		<!-- 用multiple則可以選擇多個檔案 -->
		1. Select a file：<input type="file" name="file1" /><br /> <input
			type="submit" name="btnOK" value="2. 送出資料" />
	</form>
</body>
</html>