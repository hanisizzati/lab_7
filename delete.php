<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['matric'])) {
    header("Location: login_page.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lab_7";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['matric'])) {
    $matric = $_GET['matric'];

    $sql = "DELETE FROM users WHERE matric = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $matric);

    if ($stmt->execute()) {
        echo "User with matric number $matric has been deleted successfully.";
    } else {
        echo "Failed to delete user with matric number $matric.";
    }

    $stmt->close();
}

$conn->close();
?>
