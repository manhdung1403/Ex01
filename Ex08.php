<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate the area of a circle.</title>
</head>
<body>
    <h1>calculate the area of a circle.</h1>
        <form action="" method="post">
            <div>
                <label for="num">Radius: </label>
                <input name="num" id="num"/>
                <input type="submit" name="btnSend" value="Send"/>
            </div>
        </form>
        <?php
        $btnSend = $_POST['btnSend'];
        $Area = 0;
        if (isset($btnSend)){
            $num = $_POST['num'];
            if($num > 0){
            echo '<h2>Radius: '. $num . '</h2>';
            $Area = $num*$num*3.14;
            echo 'Area of the circle  ' . $num . ' is : ' . $Area . '';
            }else{
                echo "Please enter a positive number for the radius.";
            }
        }
        ?>
</body>
</html>