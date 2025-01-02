<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Login</title>
</head>
<body>
    <?php
    // Starts session
    session_start();

    // Check if session is already started
    if (isset($_SESSION['username'])) {
        // Redirect to another page if session exists
        header('Location: viewSession.php');
        exit();
    }

    // Handle login (store session data directly without validation)
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Storing username and password in session
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];

        // Redirecting user to viewSession.php
        header('Location: viewSession.php');
        exit();
    }
    ?>

    <!-- Login Form -->
    <form action="" method="POST">
        <h3>Login Form</h3>
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Enter username" required>
        <br><br>
        <label for="password">Password: </label>
        <input type="password" name="password" placeholder="Enter password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
