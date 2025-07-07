<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reverse a String</title>
</head>
<body>
    <div class="container">
        <h2>Reverse a String</h2>
        <form method="post">
            <label for="text">Enter a string:</label>
            <input type="text" name="text" id="text" required>
            <input type="submit" name="btnReverse" value="Reverse String">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnReverse"])) {
            $input = $_POST["text"];

            // Reverse the string
            $reversed = strrev($input);
            echo "Original string: <strong>$input</strong><br>";
            echo "Reversed string: <strong>$reversed</strong>";
        }
        ?>
    </div>
</body>
</html>
