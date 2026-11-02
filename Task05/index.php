<?php
$numbers = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

$oddNumbers = [];

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 != 0) {
        $oddNumbers[] = $numbers[$i];
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 5 - Remove Even Numbers</title></head>
<body>
<h2>Original Array</h2>
<p><?php echo implode(", ", $numbers); ?></p>

<h2>Array After Removing Even Numbers</h2>
<p><?php echo implode(", ", $oddNumbers); ?></p>
</body>
</html>
