<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2 Palindrome</title>
</head>
<body>
    <?php 
        // Q2. Write a PHP function that checks whether a passed string is a palindrome or not?
        // A palindrome is a word, phrase, or sequence that reads the same backward as forward,
        // e.g., madam or nurses run
        function checkPalindrome($word){
            $originalWord = $word;
            $reversedWord = strrev($word);
            if($originalWord == $reversedWord){
                echo '<h3>"'. $word . '" is a palindrome word. </h3>';
            } else {
                echo '<h3>"'. $word . '" is not a palindrome word. </h3>';
            }
        }

        checkPalindrome('madam');
        checkPalindrome('hello');
    ?>
</body>
</html>