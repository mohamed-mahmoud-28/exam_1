<?php
$numbers = [10, 20, 30, 40, 50];

$sum = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $sum = $sum + $numbers[$i];
}

$average = $sum / count($numbers);
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 4 - Average</title></head>
<body>
<h2>Average of Numbers</h2>
<p>Numbers: <?php echo implode(", ", $numbers); ?></p>
<p>Sum: <?php echo $sum; ?></p>
<p>Average: <?php echo $average; ?></p>
</body>
</html>
