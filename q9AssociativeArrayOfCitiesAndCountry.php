<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q9 Associative Array</title>
</head>
<body>
    <form action="" method="post">
        <h3>Please choose a city</h3>
        <select id="city" name="city" required>
            <?php
                $cities = [
                    "Nepal" => "Kathmandu",
                    "Japan" => "Tokyo",
                    "Mexico" => "Mexico City",
                    "USA" => "New York City",
                    "India" => "Mumbai",
                    "Korea" => "Seoul",
                    "China" => "Shanghai",
                    "Nigeria" => "Lagos",
                    "Argentina" => "Buenos Aires",
                    "Egypt" => "Cairo",
                    "England" => "London"
                ];
                foreach ($cities as $country => $city) {
                    echo "<option value='$city'> $city</option>";
                }
            ?>
        </select>
        <button type="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST['city'])){
            $selectedCity = $_POST['city'];
            $country = array_search($selectedCity, $cities);
            echo "<h3>$selectedCity is in $country.</h3>";
        }
    ?>
</body>
</html>