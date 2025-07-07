<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check number is even or odd</title>
</head>
<body>
    <h1>check number is even or odd</h1>
        <form action="" method="post">
            <div>
                <label for="num">Your Number: </label>
                <input name="num" id="num"/>
                <input type="submit" name="btnSend" value="Send"/>
            </div>
        </form>
        <?php
        $btnSend = $_POST['btnSend'];
        if (isset($btnSend)){
            $num = $_POST['num'];
            echo '<h2>The Number: '. $num . '</h2>';
            if($num % 2==0 && $num != 0){
                echo ''. $num . ' is the Even Number';}
            else if ($num % 2 != 0){
                echo ''. $num . ' is the Odd Number';}
            else{
                echo ''. $num . ' is not even and not odd numbers';
            }
        }
        ?>
</body>
</html>