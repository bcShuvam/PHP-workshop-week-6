<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rect Function</title>
</head>
<body>
    <?php
        // Q11. You will rewrite the rectangle area function above exercise once again, this time to
        // accept user input. Present a form to the user with the message "Please enter the values
        // of the length and width of your rectangle." Below this, supply two text boxes, one for
        // length and one for width. Using your function to process the user supplied values, return
        // the result statement from the previous exercise to the user. Reminder: the statement was
        // "A rectangle of length $l and width $w has an area of $area.", where $l and $w are the
        // arguments and $area is the result.
        function areaOfRect($width, $length){
            $area = $width * $length;
            echo "<h3>A rectangle of length $length and width $width has an area of $area.</h3>";
        }
        areaOfRect(5, 10);
    ?>
</body>
</html>