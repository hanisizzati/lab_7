<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $matric = $_POST['matric'];
        $name = $_POST['name'];
        $accessLevel = $_POST['accessLevel'];

 
        $conn = new mysqli("localhost", "username", "password", "Lab_7");


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (matric, name, accessLevel) VALUES ('$matric', '$name', '$accessLevel')";

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
        
        <label for="accessLevel">Access Level:</label>
        <input type="text" id="accessLevel" name="accessLevel" required><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
