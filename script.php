<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bad words 2.0</title>
</head>
<body>

<?php
$paragraph = $_GET["paragraph"];
$badWord = $_GET["badWord"];
$censored = str_replace($badWord, "***", strtolower($paragraph))
?>

<h2>Not censored</h2>
<h4><?php echo $paragraph;?></h4>
<h6>Numero di caratteri: <?php  echo strlen($paragraph) ?></h6>

<h2>Censored</h2>
<h4><?php echo $censored;?></h4>
<h6>Numero di caratteri: <?php  echo strlen($censored) ?></h6>

</body>
</html>