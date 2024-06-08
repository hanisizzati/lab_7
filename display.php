<!DOCTYPE html>
<html lang='eng'>
<head>
    <title>Display</title>
</head>
<body>
<?php
// Define an array of data containing information for each person
$users = array(
    array("matric" => "02000", "name" => "Nur Ariffin Mohd Zin", "level" => "lecturer"),
    array("matric" => "A100", "name" => "Ahmad", "level" => "student"),
    array("matric" => "A101", "name" => "Abu", "level" => "student"),
    array("matric" => "A103", "name" => "Ahmad bin Abu", "level" => "student")
);

?>
<table border="1">
    <tr>
        <th>Matric</th>
        <th>Name</th>
        <th>Level</th>
    </tr>
    <?php
    // Loop through each user in the array and display their information in a table row
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user["matric"] . "</td>";
        echo "<td>" . $user["name"] . "</td>";
        echo "<td>" . $user["level"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
