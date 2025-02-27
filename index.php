<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car List</title>
</head>
<body>
    <h2 style="text-align:center;">Car List</h2>
    <table>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Color</th>
        </tr>
        <?php
        $sql = "SELECT brand, model, color FROM Cars";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['brand']}</td><td>{$row['model']}</td><td>{$row['color']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No cars found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
