<?php
$username = "admin";
$password = "12345";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    if ($inputUsername === $username && $inputPassword === $password) {
        $message = "Login successful! Welcome, " . $inputUsername . ".";
    } else {
        $message = "Invalid username or password.";
    }
}

echo '
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p>' . $message . '</p>

</body>
</html>
';
?>
