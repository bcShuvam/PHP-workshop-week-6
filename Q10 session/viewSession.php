<?php
session_start();

    // Check if the "End Session" button is clicked or not
    if (isset($_POST['end_session'])) {
        session_unset(); // Deletes all the session variables/data
        session_destroy(); // Destroys the session
        header('Location: createSession.php'); // Redirect to the login page
        exit();
    }

    // Checking if their is any active session or not
    if (session_status() === PHP_SESSION_NONE || empty($_SESSION)) {
        echo "No session is active.";
        header('Location: createSession.php'); // Redirecting to the create session page
        exit();
    }

    // If their is any active session then, display the welcome message
    $username = $_SESSION['username'];
    echo "<h3>Welcome, $username</h3>";
?>

<!-- Form to end session -->
<form method="POST">
    <button type="submit" name="end_session">End Session</button>
</form>