<?php
$colors = ["white", "lightblue", "lightgreen", "lightyellow", "lightpink"];

if (isset($_POST["color"])) {
    $selectedColor = $_POST["color"];

    // Accept only colors from our dropdown list.
    if (in_array($selectedColor, $colors)) {
        setcookie("background_color", $selectedColor, time() + (86400 * 30), "/");
        $_COOKIE["background_color"] = $selectedColor;
    }
}

$backgroundColor = "white";

if (isset($_COOKIE["background_color"]) && in_array($_COOKIE["background_color"], $colors)) {
    $backgroundColor = $_COOKIE["background_color"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Task 11 - Background Cookie</title>
</head>
<body style="background-color: <?php echo htmlspecialchars($backgroundColor); ?>;">
    <h2>Change Website Background Color</h2>

    <form method="POST">
        <label>Choose a background color:</label>

        <select name="color">
            <option value="white">White</option>
            <option value="lightblue">Light Blue</option>
            <option value="lightgreen">Light Green</option>
            <option value="lightyellow">Light Yellow</option>
            <option value="lightpink">Light Pink</option>
        </select>

        <button type="submit">Save Color</button>
    </form>

    <p>Current background: <?php echo htmlspecialchars($backgroundColor); ?></p>
    <p>The selected color is saved in a cookie for 30 days.</p>
</body>
</html>
