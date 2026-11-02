<?php
$text = "I am learning PHP";
$searchWord = "PHP";

$pattern = "/" . preg_quote($searchWord, "/") . "/";

if (preg_match($pattern, $text)) {
    $result = "The string contains the word.";
} else {
    $result = "The string does not contain the word.";
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Task 9 - Regex</title></head>
<body>
<h2>Check if String Contains Another String</h2>
<p>Text: <?php echo htmlspecialchars($text); ?></p>
<p>Search word: <?php echo htmlspecialchars($searchWord); ?></p>
<p><?php echo $result; ?></p>
</body>
</html>
