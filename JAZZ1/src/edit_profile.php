<?php
session_start();
include 'connect.php';

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login-signup.php'); // Redirect to login page if not logged in
    exit();
}

// Fetch user's current profile information
$username = $_SESSION['username'];
$query = "SELECT * FROM `login` WHERE username='$username'";
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result);
} else {
    echo "Error: Unable to fetch user profile.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles/ep.css">
</head>

<body>

    <form action="update_profile.php" method="post">
        <img src="images/user.png"><br><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $userData['username']; ?>" readonly><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $userData['email']; ?>"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <button type="submit" name="update_profile">Update Profile</button>
    </form>
</body>

</html>
