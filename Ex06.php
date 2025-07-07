<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangle Perimeter Calculator</title>
</head>
<body>
    <div class="container">
        <h2>Triangle Perimeter Calculator</h2>
        <form method="post">
            <label for="sides">Enter 3 sides (comma-separated):</label>
            <input type="text" name="sides" id="sides" >
            <input type="submit" name="btnCalculate" value="Calculate Perimeter">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCalculate"])) {
            $input = $_POST["sides"];
            
            $parts = explode(',', str_replace(' ', '', $input));

            if (count($parts) == 3 && is_numeric($parts[0]) && is_numeric($parts[1]) && is_numeric($parts[2])) {
                $a = floatval($parts[0]);
                $b = floatval($parts[1]);
                $c = floatval($parts[2]);

                if ($a > 0 && $b > 0 && $c > 0) {
                    $perimeter = $a + $b + $c;
                    echo "Entered sides: $a, $b, $c <br>";
                    echo "Perimeter of the triangle = <strong>$perimeter</strong>";
                } else {
                    echo "Please enter three numbers greater than 0.";
                }
            } else {
                echo "Please enter exactly 3 numbers separated by commas.";
            }
        }
        ?>
    </div>
</body>
</html>
