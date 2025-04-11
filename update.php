<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM feedback WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Feedback</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #e0f2f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .edit-container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #00796b;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #00796b;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>
    <div class="edit-container">
        <h2>✏️ Edit Feedback</h2>
        <form action="update_save.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="name" value="<?= $row['name'] ?>" required>
            <input type="email" name="email" value="<?= $row['email'] ?>" required>
            <textarea name="message" rows="5" required><?= $row['message'] ?></textarea>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
