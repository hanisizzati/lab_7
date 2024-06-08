<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="login.php">
        Matric: <input type="text" name="matric" required><br>
        Password: <input type="text" name="password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
    <a href="register.php">Register here if you have not</a>
</body>
</html>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matric = $_POST['matric'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "username", "password", "Lab_7");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE matric='$matric' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loggedin'] = true;
        header("Location: display.php");
    } else {
        echo "Invalid login";
    }

    $conn->close();
}
?>
