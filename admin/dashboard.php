<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "chat_db";

$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query("SELECT * FROM contacts ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Admin Dashboard</title>
</head>
<body>

<!-- LOGOUT BUTTON (TOP-RIGHT) -->
<div class="admin-logout">
    <a href="logout.php">Logout</a>
</div>

<!-- PAGE TITLE -->
<h1 class="admin-title">Contact Messages</h1>

<!-- CENTERED TABLE WRAPPER -->
<div class="admin-wrapper">
    <div class="admin-table-container">

        <table class="admin-table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>

            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['subject'] ?></td>
                    <td><?= $row['text'] ?></td>
                </tr>
            <?php endwhile; ?>
        </table>

    </div>
</div>

</body>
</html>
