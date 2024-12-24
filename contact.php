<?php
include('includes/header.php');
?>

<h2>Contact Us</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<p>Thank you for contacting us, $name. We will get back to you at $email shortly.</p>";
}
?>

<form method="POST" action="contact.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <input type="submit" value="Submit">
</form>

<?php
include('includes/footer.php');
?>
