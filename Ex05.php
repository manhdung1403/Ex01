<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> count the number of vowels in a string.</title>
</head>
<body>
    <h1> count the number of vowels in a string.</h1>
        <form action="" method="post">
            <div>
                <label for="text">Your String: </label>
                <input name="text" id="text"/>
                <input type="submit" name="btnSend" value="Send"/>
            </div>
        </form>
        <?php
        $btnSend = $_POST['btnSend'];
        $input = $_POST["text"];
            $vowelCount = 0;
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $lower = strtolower($input);

            for ($i = 0; $i < strlen($lower); $i++) {
                if (in_array($lower[$i], $vowels)) {
                    $vowelCount++;
                }
            }

            echo "<div class='result'>";
            echo "Input: <strong>$input</strong><br>";
            echo "Vowel count: <strong>$vowelCount</strong>";
            echo "</div>";
        
        ?>
    
</body>
</html>