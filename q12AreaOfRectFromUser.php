<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
</head>
<body>
    <form action="" method="post">
        <h3>This website calculates area of rectangle</h3>
        <label for="length">Enter Length: </label>
        <input type="number" name="length" id="length">
        <br><br>
        <label for="width">Enter Width: </label>
        <input type="number" name="width" id="width">
        <br><br>
        <button type="submit">Calculate</button>
    </form>
    <?php
        // Q12. You will rewrite the rectangle area function above exercise once again, this time to
        // accept user input. Present a form to the user with the message "Please enter the values
        // of the length and width of your rectangle." Below this, supply two text boxes, one for
        // length and one for width. Using your function to process the user supplied values, return
        // the result statement from the previous exercise to the user. Reminder: the statement was
        // "A rectangle of length $l and width $w has an area of $area.", where $l and $w are the
        // arguments and $area is the result.
        if(isset($_POST['width']) && isset($_POST['length'])){
            $width = $_POST['width'];
            $length = $_POST['length'];
            $area = $width * $length;
            echo "<h3>A rectangle of length $length and width $width has an area of $area.</h3>";
        }
    ?>
</body>
</html>