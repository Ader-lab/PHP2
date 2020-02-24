<?php 
  $nWeek = date("w");
  $sWeekdays = array("日", "一", "二", "三", "四", "五", "六");
  $sWeek = $sWeekdays[$nWeek];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    
    .container{
      margin: 20px;
    }
  
  </style>

</head>
<body>
  <div class="container">
      <h1>今天是星期<?php echo $sWeek ?></h1>
      <hr>
      <img src="Fruit<?php echo $nWeek ?>.gif" />
  </div>
  <script>
    document.write("Hello")
  </script>
</body>
</html>

