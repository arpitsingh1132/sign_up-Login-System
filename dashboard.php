<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: C:\Users\Admin\OneDrive\Desktop\sign_up-Login System\login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>This is your dashboard.</p>
    <a href="C:\Users\Admin\OneDrive\Desktop\sign_up-Login System\logout.php">Logout</a>
</body>
</html>
