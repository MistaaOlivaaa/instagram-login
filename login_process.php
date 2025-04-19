<?php
session_start();


$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : ''; 


echo "<h1>Processing Login...</h1>";
echo "<p>Username received: " . htmlspecialchars($username) . "</p>";
echo "<p>Password received: [PASSWORD NOT SHOWN]</p>";
echo "<p><strong>Note:</strong> This is a placeholder. In a real application, you would verify credentials against a database using hashed passwords and redirect upon success/failure.</p>";
echo '<a href="index.php">Back to Login</a>';



?>