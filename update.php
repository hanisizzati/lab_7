<!DOCTYPE html>
<html lang='eng'>
<head>
    <title>Update</title>
</head>
<body>
<?php
// Define an array of data containing information for each person
$users = array(
    array("matric" => "02000", "name" => "Nur Ariffin Mohd Zin", "level" => "lecturer", "action" => "<a href='update.php?id=02000'>Update</a> | <a href='delete.php?id=02000'>Delete</a>"),
    array("matric" => "A100", "name" => "Ahmad", "level" => "student", "action" => "<a href='update.php?id=A100'>Update</a> | <a href='delete.php?id=A100'>Delete</a>"),
    array("matric" => "A101", "name" => "Abu", "level" => "student", "action" => "<a href='update.php?id=A101'>Update</a> | <a href='delete.php?id=A101'>Delete</a>"),
    array("matric" => "A103", "name" => "Ahmad bin Abu", "level" => "student", "action" => "<a href='update.php?id=A103'>Update</a> | <a href='delete.php?id=A103'>Delete</a>")
);

?>
<table border="1">
    <tr>
        <th>Matric</th>
        <th>Name</th>
        <th>Level</th>
        <th>Action</th>
    </tr>
    <?php
    // Loop through each user in the array and display their information in a table row
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user["matric"] . "</td>";
        echo "<td>" . $user["name"] . "</td>";
        echo "<td>" . $user["level"] . "</td>";
        echo "<td>" . $user["action"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
