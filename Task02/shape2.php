<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Shape 2</title></head>
<body>
<h2>Shape 2</h2>
<pre>
<?php
// Print 1, 2, 3, 4, 5, 5, 4, 3, 2, 1 stars.

for ($i = 1; $i <= 10; $i++) {

    if ($i <= 5) {
        $stars = $i;
    } else {
        $stars = 11 - $i;
    }

    for ($j = 1; $j <= $stars; $j++) {
        echo "* ";
    }

    echo "\n";
}
?>
</pre>
</body>
</html>
