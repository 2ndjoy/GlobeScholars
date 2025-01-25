<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "globescholardb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $countryName = $_POST['name'];

    $sql = "INSERT INTO applied_countries (name) VALUES (?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $countryName);

    if ($stmt->execute()) {
        echo "Success: Country added to the applied list.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
