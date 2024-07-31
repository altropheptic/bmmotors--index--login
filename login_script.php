<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve submitted credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    if ($username === 'admin@bm-motors.in' && $password === 'Bmm@admin') {
        // Redirect to the desired URL on successful login
        header('Location: index.html');
        exit();
    } else {
        // Redirect back to login with an error message
        header('Location: login.html?error=invalid_credentials');
        exit();
    }
} else {
    // Handle the case where the request method is not POST
    echo 'Invalid request method';
}
?>
