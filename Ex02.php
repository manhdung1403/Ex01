<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celsius to Fahrenheit Converter</title>
</head>
<body>
    <h2>Convert Celsius to Fahrenheit</h2>
    <form method="post">
        Enter temperature in Celsius: 
        <input type="text" name="celsius">
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST["celsius"];
        if (is_numeric($celsius)) {
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "<p>$celsius °C = $fahrenheit °F</p>";
        } else {
            echo "<p>Please enter a valid numeric value.</p>";
        }
    }
    ?>
</body>
</html>
