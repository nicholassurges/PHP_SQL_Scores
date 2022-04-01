<?php

$score1 = $_POST['score_1'];  

$score2 = $_POST['score_2'];  

$score3 = $_POST['score_3'];  

$sum = $score1 + $score2 + $score3;

$avg = $sum/3;

?>

<html>

<head>

<link rel="stylesheet" href="style.css">



</head>

<body>
<main>
<h1>Assignment 2</h1>
<br>

<p>Student Name:      <?php echo $_POST["first_name"]." ". $_POST["last_name"]; ?></p><br>

<p>Your Scores:       <?php echo $_POST["score_1"].", ". $_POST["score_2"].", ". $_POST["score_3"]; ?></p><br>



<p>Average:            <?php echo round($avg,2) ?></p>


</main>
</body>

</html>