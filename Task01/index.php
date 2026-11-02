<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Task 1 - Chessboard</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 45px; height: 45px; }
        .black { background-color: black; }
        .white { background-color: white; }
    </style>
</head>
<body>
<h2>Chessboard</h2>

<table border="1">
<?php
for ($i = 1; $i <= 8; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= 8; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "<td class='white'></td>";
        } else {
            echo "<td class='black'></td>";
        }
    }

    echo "</tr>";
}
?>
</table>
</body>
</html>
