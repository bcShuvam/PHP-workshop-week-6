<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q8 Array</title>
</head>
<body>
    <?php
        // Q8. Create an array with the following values: Kathmandu, Tokyo, Mexico City, New York
        // City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.
        // Print these values to the browser separated by commas, using a loop to iterate over the
        // array. Sort the array, then print the values to the browser in an unordered list, again
        // using a loop.
        // Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the
        // array again, and print it once more to the browser in an unordered list.

        $cities = ["Kathmandu", "Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London"];
        echo "<h3> Displaying cities array with commas in between:</h3>";
        foreach ($cities as $city){
            echo "$city, ";
        }

        // Sorting cities array in ascending order
        echo "<h3> Displaying sorted cities array with in unordered list tag:</h3>";
        sort($cities);
        echo '<ul>'; // unordered list
        foreach ($cities as $city){
            echo "<li>$city</li>"; // adding cities as list items
        }
        echo '</ul>';

        // Adding new cities to the cities array and sorting it again
        array_push($cities,'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
        sort($cities);
        
        echo "<h3> Displaying new sorted cities array with in unordered list tag again:</h3>";
        echo '<ul>'; // unordered list
        foreach ($cities as $city){
            echo "<li>$city</li>"; // adding cities as list items
        }
        echo '</ul>';
    ?>
</body>
</html>