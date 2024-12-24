<?php
include('includes/header.php');
?>

<h2>Tutorials</h2>

<?php
// Kết nối MySQL
$conn = new mysqli("localhost", "root", "", "tutorial_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, description FROM tutorials";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>" . $row["title"]. "</h3>";
        echo "<p>" . $row["description"]. "</p>";
        echo "</div>";
    }
} else {
    echo "No tutorials found";
}

$conn->close();
?>

<?php
include('includes/footer.php');
?>
