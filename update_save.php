<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $conn->prepare("UPDATE feedback SET name=?, email=?, message=? WHERE id=?");
$stmt->bind_param("sssi", $name, $email, $message, $id);

if ($stmt->execute()) {
    echo "✅ Feedback updated successfully.<br><a href='retrieve.php'>Back</a>";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
