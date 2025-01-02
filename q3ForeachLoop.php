<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3 Foreach</title>
</head>
<body>
    <?php 
        // Q3. Write a program to loop through an associative array using foreach() or with each().
        // Suppose an associative array is -
        // $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');
        
        $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');
        echo "<h3> Using foreach() loop to loop an associative array </h3><br>";
        foreach ($a as $key => $value){
            echo "<b> $key: $value </b><br>";
        }
    ?>
</body>
</html>