<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Shape 3</title></head>
<body>
<h2>Shape 3</h2>
<pre>
<?php

for ($i = 1; $i <= 5; $i++) {

    if ($i <= 3) {
        $stars = 2 * $i - 1;
    } else {
        $stars = 10 - (2 * $i - 1);
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
