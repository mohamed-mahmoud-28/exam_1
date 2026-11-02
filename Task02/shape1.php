
<?php
echo '<pre>';
for ($i = 1; $i <= 9; $i++) {

    if ($i <= 5) {
        $stars = $i;
    } else {
        $stars = 10 - $i;
    }

    for ($j = 1; $j <= 5 - $stars; $j++) {
        echo " ";
    }

    for ($j = 1; $j <= $stars; $j++) {
        echo "* ";
    }

    echo "<br>";
}

?>
