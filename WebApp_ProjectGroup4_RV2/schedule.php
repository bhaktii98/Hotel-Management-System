<?php
// Connect to the database (Update these credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sabhotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $roomNumber = $_POST["roomNo"];
    $time = $_POST["time"];

    // Insert the data into the database
    $sql = "INSERT INTO schedule (room_number, time) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ss", $roomNumber, $time);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Scheduled Service request sent...');</script>";
        echo "<script>window.location.href='/hms-main/facilities.php';</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
