<?php
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user === "nijat" && $pass === "admin123") {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Admin Login</title>
</head>
<body>

<div class="admin-login-container">
    <h1>Admin Login</h1>

    <form method="POST">
        <input type="text" name="user" placeholder="Admin Username" required>
        <input type="password" name="pass" placeholder="Password" required>
        <button type="submit">Login</button> 
        <a href="../index.html" class="admin-back-btn">Go Back</a>

        <?php if($error): ?>
            <p class="admin-error"><?= $error ?></p>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
