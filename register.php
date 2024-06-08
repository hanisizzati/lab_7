<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $matric = $_POST['matric'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        
        $servername = "localhost";
        $username = "root"; // Default XAMPP username
        $password_db = ""; // Default XAMPP password (empty string)
        $dbname = "Lab_7"; // Database name

        
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "INSERT INTO users (matric, name, password, role) VALUES ('$matric', '$name', '$password', '$role')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        
        $conn->close();
    }
    ?>

    <form method="POST" action="register.php">
        <label for="matric">Matric:</label>
        <input type="text" id="matric" name="matric" required><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="">Please select</option>
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
