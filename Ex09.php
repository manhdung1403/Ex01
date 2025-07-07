<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Palindrome Number</title>
</head>
<body>
    <div class="container">
        <h2>Check Palindrome Number</h2>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="text" name="number" id="number" required>
            <input type="submit" name="btnCheck" value="Check Palindrome">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCheck"])) {
            $num = $_POST["number"];

            if (is_numeric($num) && intval($num) == $num && $num >= 0) {
                $original = strval($num);
                $reversed = strrev($original);

                if ($original === $reversed) {
                    echo '' . $num . ' is Palindrome';
                } else {
                    echo '' . $num . ' is Not Palindrome';
                }
            } else {
                echo "Please enter a non-negative integer.";
            }
        }
        ?>
    </div>
</body>
</html>
