<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q7 Poem</title>
</head>
<body>
    <form action="" method="post">
        <h3>Enter a weekday to hear a poem</h3>
        <label for="weekday">Enter weekday: </label>
        <input type="text" name="weekday" required>
        <button type="submit">Submit</button>
    </form>
    <?php
        // Q7. For this PHP exercise, you will use the same format as the previous exercise, requesting
        // input in the first part, and responding in the second, through the magic of PHP's if-else
        // statement. In the first section, give the user an input field and request that they enter a
        // day of the week.
        // For the second section, you'll need the following poem:

        // ○ Laugh on Monday, laugh for danger.
        // ○ Laugh on Tuesday, smile at a stranger.
        // ○ Laugh on Wednesday, laugh for a letter.
        // ○ Laugh on Thursday, something better.
        // ○ Laugh on Friday, laugh for sorrow.
        // ○ Laugh on Saturday, joy tomorrow.
        // Using the else-elseif-else construction, set each line to output in response to the day the
        // user inputs, with a general response for any input that is not in the poem.

        if(isset($_POST['weekday'])){ // checking if weekday is set when click on submit
            $weekday = strtolower($_POST['weekday']);
            echo '<br><b>';
            if($weekday == 'monday'){
                echo "Laugh on Monday, laugh for danger.";
            } elseif($weekday == 'tuesday'){
                echo "Laugh on Tuesday, smile at a stranger.";
            } elseif($weekday == 'wednesday'){
                echo "Laugh on Wednesday, laugh for a letter.";
            } elseif($weekday == 'thursday'){
                echo "Laugh on Thursday, something better.";
            } elseif($weekday == 'friday'){
                echo "Laugh on Friday, laugh for sorrow.";
            } elseif($weekday == 'saturday'){
                echo "Laugh on Saturday, joy tomorrow.";
            } else {
                echo "\"$weekday\" is invalid weekday or no poem found.";
            }
            echo '</b>';
        }
    ?>
</body>
</html>

