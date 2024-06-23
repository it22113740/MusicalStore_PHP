<?php
session_start();
include 'connect.php';

if (isset($_POST['update_profile'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; // You may want to add more validation and encryption for password

    // Update the user's profile information
    $username = $_SESSION['username'];
    $query = "UPDATE `login` SET email='$email', password='$password' WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Update successful
        header('location:index.php?update_success=1');
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
}
?>
