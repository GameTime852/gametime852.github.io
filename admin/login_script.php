<?php
    session_start();

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get and sanitize the username and password from the form
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password = isset($_POST["password"]) ? $_POST["password"] : '';

        // Check if the username and password are correct (replace with your own authentication logic)
        if ($username == "admin" && $password == "password") {
            // Authentication successful, redirect to admin panel
            $_SESSION['loggedin'] = true;
            header("Location: admin.html");
            exit();
        } else {
            // Authentication failed, display error message
            echo "Invalid username or password.";
        }
    }
?>