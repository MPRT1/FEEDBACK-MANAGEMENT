<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>All Feedback</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f1f1f1;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #00796b;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #004d40;
            color: white;
        }

        a {
            text-decoration: none;
            color: #00796b;
            font-weight: bold;
        }

        a:hover {
            color: #004d40;
        }
    </style>
</head>
<body>
    <h2>📋 All Feedback</h2>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Date</th><th>Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM feedback");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['submitted_at']}</td>
                    <td>
                        <a href='update.php?id={$row['id']}'>Edit</a> | 
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
