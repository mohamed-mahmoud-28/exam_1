<?php
$numbers = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

$ascending = $numbers;
for ($i = 0; $i < count($ascending); $i++) {
    for ($j = 0; $j < count($ascending) - 1; $j++) {
        if ($ascending[$j] > $ascending[$j + 1]) {
            $temp = $ascending[$j];
            $ascending[$j] = $ascending[$j + 1];
            $ascending[$j + 1] = $temp;
        }
    }
}

$descending = $numbers;
for ($i = 0; $i < count($descending); $i++) {
    for ($j = 0; $j < count($descending) - 1; $j++) {
        if ($descending[$j] < $descending[$j + 1]) {
            $temp = $descending[$j];
            $descending[$j] = $descending[$j + 1];
            $descending[$j + 1] = $temp;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 3 - Sort Array</title></head>
<body>
<h2>Original Array</h2>
<?php echo implode(", ", $numbers); ?>

<h2>Ascending (ASC)</h2>
<?php echo implode(", ", $ascending); ?>

<h2>Descending (DESC)</h2>
<?php echo implode(", ", $descending); ?>
</body>
</html>
