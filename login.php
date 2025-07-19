<?php
session_start();
$conn = new mysqli("localhost", "root", "", "user_auth");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$identifier = trim($_POST['identifier']);
$password = $_POST['password'];

if (empty($identifier) || empty($password)) {
    die("All fields are required.");
}

// Check user by username or email
$stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE username = ? OR email = ?");
$stmt->bind_param("ss", $identifier, $identifier);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: C:\Users\Admin\OneDrive\Desktop\sign_up-Login System\dashboard.php");
        exit();
    } else {
        die("Incorrect password.");
    }
} else {
    die("User not found.");
}
$stmt->close();
$conn->close();
?>
