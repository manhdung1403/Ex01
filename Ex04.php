<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Prime Number</title>
</head>
<body>
    <div class="container">
        <h2>Check Prime Number</h2>
        <form method="post">
            <label for="number">Enter a number:</label>
            <input type="text" name="number" id="number" required>
            <input type="submit" name="btnCheck" value="Check">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCheck"])) {
            $n = $_POST["number"];
            if (is_numeric($n) && intval($n) == $n && $n > 1) {
                $n = intval($n);
                $isPrime = true;
                for ($i = 2; $i <= sqrt($n); $i++) {
                    if ($n % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }
                if ($isPrime) {
                    echo '<div class="result">'.$n . ' is Prime.</div>';
                } else {
                    echo '<div class="result">'.$n . ' is Not Prime.</div>';
                }
            } else {
                echo 'Please enter an integer greater than 1.';
            }
        }
        ?>
    </div>
</body>
</html>
