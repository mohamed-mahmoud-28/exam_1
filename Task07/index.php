<?php
$sampleDate = "2012-12-21";

$date = new DateTime($sampleDate);
$date->modify("+1 month");

$newDate = $date->format("Y-m-d");
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 7 - Add One Month</title></head>
<body>
<h2>Increment Date by One Month</h2>
<p>Sample date: 2012-12-21</p>
<p>Expected output: 2013-01-21</p>
<p>New date: <?php echo $newDate; ?></p>
</body>
</html>
