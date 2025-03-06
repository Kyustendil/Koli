<?php
// car.php - Display Car Details with Image
include 'db.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid car ID.");
}

$car_id = intval($_GET['id']);
$sql = "SELECT * FROM Cars WHERE id = $car_id";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Car not found.");
}

$car = $result->fetch_assoc();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $car['brand'] . ' ' . $car['model']; ?></title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        .container { margin: 50px auto; width: 50%; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        img { width: 300px; height: auto; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $car['brand'] . ' ' . $car['model']; ?></h2>
        <img src="<?php echo $car['img']; ?>" alt="<?php echo $car['brand'] . ' ' . $car['model']; ?>">
        <p><strong>Brand:</strong> <?php echo $car['brand']; ?></p>
        <p><strong>Model:</strong> <?php echo $car['model']; ?></p>
        <p><strong>Color:</strong> <?php echo $car['color']; ?></p>
        <a href="index.php">Back to Car List</a>
    </div>
</body>
</html>
