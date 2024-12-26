<?php
session_start();

// Replace this with actual session logic to retrieve the admin username.
$admin_username = isset($_SESSION['admin_username']) ? $_SESSION['admin_username'] : 'Admin';

// Get the current hour.
$current_hour = date('H');

// Determine the greeting based on the current time.
if ($current_hour < 12) {
    $greeting = "Good morning";
} elseif ($current_hour < 18) {
    $greeting = "Good afternoon";
} else {
    $greeting = "Good evening";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1><?php echo "$greeting, $admin_username!"; ?></h1>
</body>
</html>
