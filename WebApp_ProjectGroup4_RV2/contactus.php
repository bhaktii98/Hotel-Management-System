
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
    $fn = $_POST["firstname"];
    $ln = $_POST["lastname"];
    $emaill = $_POST["email"];
    $sbj = $_POST["subject"];
    $Message = $_POST["message"];

    // Insert the data into the database
    $sql = "INSERT INTO customercontact (First_Name,Last_Name,Email,Subject,Message) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssss", $fn,$ln,$emaill,$sbj,$Message);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Message sent. Our team will connect you soon...');</script>";
        echo "<script>window.location.href='/hms-main/home.php';</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

