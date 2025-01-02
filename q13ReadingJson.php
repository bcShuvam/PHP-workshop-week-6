<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop over json data</title>
</head>
<body>
    <?php
        // Write a php program to loop over the json data.
        // Suppose, you have the following json data. Display the output on a table in HTML.
        // Note: PHP allows us to easily convert JSON to arrays. PHP provides predefined
        // functions to easily encode and decode json string into a php array.
        $jsonData = 
            '[
                {
                    "name": "John Garg",
                    "age": "15",
                    "school": "Ahlcon Public school"
                },
                {
                    "name": "Smith Soy",
                    "age": "16",
                    "school": "St. Marie school"
                },
                {
                    "name": "Charle Rena",
                    "age": "16",
                    "school": "St.Columba school"
                }
            ]';
        // Decoding jsonData
        $decodedJson = json_decode($jsonData, true);
        echo "<h1>Reading json data and presenting it in a table</h1>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr>
                <th>Name</th>
                <th>Age</th>
                <th>School</th>
            </tr>";
    
    // Loop through the array and display data in table rows
    foreach ($decodedJson as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "<td>" . $student['school'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
</body>
</html>