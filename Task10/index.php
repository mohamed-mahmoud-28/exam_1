<?php
function isPrime($number) {

    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 7;
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 10 - Prime Number</title></head>
<body>
<h2>Check Prime Number</h2>
<p>Number: <?php echo $number; ?></p>

<?php
if (isPrime($number)) {
    echo "The number is prime.";
} else {
    echo "The number is not prime.";
}
?>
</body>
</html>
