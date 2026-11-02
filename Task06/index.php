<?php
$numbers = [10, 30, 20];

$max = $numbers[0];

if ($numbers[1] > $max) {
    $max = $numbers[1];
}

if ($numbers[2] > $max) {
    $max = $numbers[2];
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 6 - Maximum</title></head>
<body>
<h2>Find Maximum Number Using If</h2>
<p>Numbers: <?php echo implode(", ", $numbers); ?></p>
<p>Maximum number: <?php echo $max; ?></p>
</body>
</html>
