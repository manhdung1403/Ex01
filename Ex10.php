<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fibonacci Sequence Generator</title>
</head>
<body>
    <div class="container">
        <h2>Fibonacci Sequence Generator</h2>
        <form method="post">
            <label for="num">Enter the number of terms:</label>
            <input type="text" name="num" id="num" required>
            <input type="submit" name="btnGenerate" value="Generate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnGenerate"])) {
            $n = $_POST["num"];

            if (is_numeric($n) && intval($n) == $n && $n > 0) {
                $n = intval($n);
                $fibonacci = [];
                
                for ($i = 0; $i < $n; $i++) {
                    if ($i == 0) {
                        $fibonacci[] = 0;
                    } elseif ($i == 1) {
                        $fibonacci[] = 1;
                    } else {
                        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                    }
                }    
                echo "Fibonacci sequence ($n terms):<br>";
                echo implode(", ", $fibonacci);
            } else {
                echo "Please enter a positive whole number.";
            }
        }
        ?>
    </div>
</body>
</html>
