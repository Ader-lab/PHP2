<?php


require_once("./config.php");


$link = @mysqli_connect($dbhost, $dbuser ,$dbpass) or die(mysqli_connect_error());
mysqli_select_db($link, $dbname);
$commandText = 'select * from employee';
$result = mysqli_query($link, $commandText);
// $row = mysqli_fetch_assoc($result);
// var_dump($row);



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>Employee Details</h1>
</div>

<div data-role="content">
	<ul data-role="listview" data-filter="true">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
		<li>
            <a href="employeeDetails.php?id=<?= $row["id"] ?>"> 
                <img src="images/<?= $row["picture"] ?>">
                <h4><?= $row["firstName"]." ".$row["lastName"] ?></h4>
                <p><?= $row["title"] ?> </p> <span class="ui-li-count">4</span>
            </a>
		</li>
    <?php } ?>
	</ul>
</div>

</div>
</body>
</html>