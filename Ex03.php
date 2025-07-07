<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find the factorial of a number.</title>
</head>
<body>
    <h1>find the factorial of a number.</h1>
        <form action="" method="post">
            <div>
                <label for="num">Your Number: </label>
                <input name="num" id="num"/>
                <input type="submit" name="btnSend" value="Send"/>
            </div>
        </form>
        <?php
        $btnSend = $_POST['btnSend'];
        $factorial = 1;
        if (isset($btnSend)){
            $num = $_POST['num'];
            echo '<h2>The Number: '. $num . '</h2>';
            for($i=1;$i<=$num;$i++){
                $factorial *= $i;
            }
            echo 'The factorial of ' . $num . ' is : ' . $factorial . '';
        }
        ?>
</body>
</html>