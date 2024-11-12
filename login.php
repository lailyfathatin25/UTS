<?php
// Contoh data username dan password (bisa diganti dengan database)
$valid_username = "admin";
$valid_password = "12345";

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Cek apakah username dan password sesuai
if ($username === $valid_username && $password === $valid_password) {
    echo "<h2>Login Successful!</h2>";
    echo "<p>Welcome, " . htmlspecialchars($username) . "!</p>";
} else {
    echo "<h2>Login Failed!</h2>";
    echo "<p>Invalid username or password. Please try again.</p>";
    echo "<a href='index.html'>Back to Login</a>";
}
?>
