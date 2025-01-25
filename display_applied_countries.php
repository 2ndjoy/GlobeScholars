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

// Handle Delete Request
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    $delete_sql = "DELETE FROM applied_countries WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
    header("Location: display_applied_countries.php");
    exit();
}

// Fetch data from the database
$sql = "SELECT * FROM applied_countries ORDER BY id DESC"; // Fetching all applied countries
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applied Countries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #5A6C57;
            color: white;
        }
        .container {
            margin-top: 50px;
            margin-bottom:100px;
        }
        .table {
            background-color: #1F4529;
            color: white;
        }
        .table th {
            color: #f8f9fa;
        }
        .footer {
    background-color: #1F4529;
    color: white;
    padding: 20px 0;
  }
  .footer a {
    color: #f8f9fa;
  }
  .footer a:hover {
    text-decoration: underline;
  }
    </style>
</head>
<body>
<?php
include('navbar.php');
?>
<div class="container">
    <h2 class="text-center mb-4">Applied Countries</h2>
    <?php if ($result && $result->num_rows > 0): ?>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Country Name</th>
                    <th>Applied On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars(date("d M Y, H:i", strtotime($row['applied_at']))); ?></td>
                        <td>
                            <a href="edit_country.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this country?');">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">No applied countries found.</p>
    <?php endif; ?>
</div>
<div style="margin-top:15%">
<?php
include('footer.php');
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
