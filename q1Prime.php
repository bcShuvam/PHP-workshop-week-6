<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1 Prime</title>
</head>

<body>
    <?php
    // Q1. Write a program in PHP to print prime numbers between 1 and 100.
    echo '<h3> Prime Numbers between 1 and 100 are: </h3><br>';
    for ($i = 2; $i <= 100; $i++) {
        $isPrime = true;
        for ($j = 2; $j <= $i/2; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo "<b>" . $i . ", ";
        }
    }
    ?>
</body>

</html>