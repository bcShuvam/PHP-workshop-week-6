<?php
// Q6. One very useful thing you can do with PHP is include the request for user input and the
// response in the same file, using conditional statements to tell PHP which one to show.
// For this PHP exercise, rewrite the two files of the previous exercise into one file using an
// if-else conditional statement.
// Hint: You'll need some way to tell if the form has been submitted. The function to
// determine if a variable has been set and is not null is isset().

if (isset($_POST['city'])) { // Checking if city value is set when form is submitted
    $city = $_POST['city'];
    echo "<h1>Your favorite city is \"$city\".</h1>";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Favorite City</title>
    </head>
    <body>
       <form action="" method="post">
        <h3>Enter your favorite city name</h3>
        <label for="city">Favorite City: </label>
        <input
            type="text"
            name="city"
            placeholder="Biratnagar"
            required
        />
        <button type="submit">Submit</button>
    </form>
    </body>
    </html>
    <?php
}
?>