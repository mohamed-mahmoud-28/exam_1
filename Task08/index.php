<?php
$previousMonth = date("n", strtotime("first day of last month"));
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 8 - Previous Month</title></head>
<body>
<h2>Number of the Previous Month</h2>
<p>Previous month number: <?php echo $previousMonth; ?></p>
</body>
</html>
