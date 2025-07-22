<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        echo "<div style='text-align:center;margin-top:50px;'>
                <h3 style='color:green;'>Data submitted successfully!</h3>
                <a href='index.php'>Go Back</a>
              </div>";
    } else {
        echo "<div style='text-align:center;margin-top:50px;'>
                <h3 style='color:red;'>Error: " . $stmt->error . "</h3>
                <a href='index.php'>Try Again</a>
              </div>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: index.php");
    exit;
}
?>
