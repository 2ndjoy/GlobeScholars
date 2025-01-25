<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "globescholardb";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the country data for editing
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM applied_countries WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $country = $result->fetch_assoc();
    $stmt->close();

    if (!$country) {
        die("Country not found!");
    }
} else {
    die("Invalid request!");
}

// Update the country data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updated_name = $_POST['name'];
    $update_sql = "UPDATE applied_countries SET name = ? WHERE id = ?";
    $stmt = $conn->prepare($update_sql);
    $stmt->bind_param("si", $updated_name, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: display_applied_countries.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #5A6C57; color: white;">
<div class="container mt-5">
    <h2>Edit Country</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Country Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($country['name']); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Save Changes</button>
        <a href="display_applied_countries.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
