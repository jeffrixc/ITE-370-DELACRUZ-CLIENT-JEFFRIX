<?php
require_once '../src/db.php';
require_once '../src/auth.php';
require_once '../src/validation.php';
require_once '../src/error_handler.php';

$username = sanitize($_POST['username'] ?? '');
$password = sanitize($_POST['password'] ?? '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (registerUser($username, $password)) {
        echo "Registered successfully!";
    } else {
        echo "Failed to register.";
    }
}
?>
<form method="post">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <button type="submit">Register</button>
</form>
