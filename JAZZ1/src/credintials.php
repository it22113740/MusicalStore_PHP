<?php
include 'connect.php';
session_start();

if (!empty($_POST['lbtn'])) {
    $username = $_POST['un'];
    $password = $_POST['pw'];

    if ($username == 'admin' and $password == '12345') {
        header('location: admin.php');
    } else {
        $display_message = 'Check Password or User Name';
    }
    $result = mysqli_query($conn, "Select * from `login` where username='$username' and password='$password'");
    $count = mysqli_num_rows($result);
    if ($count) {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['user_id']=$data['user_id'];
        $_SESSION['username'] = $username;
        header('location: index.php');
    } else {
        //$display_message[] = 'Check Password or User Name';
    }
} else {
    $display_message = 'can not be empty';
}

if (!empty($_POST['sbtn'])) {
    $username = $_POST['un'];
    $password = $_POST['pw'];
    $email = $_POST['email'];
    $result = mysqli_query($conn, "insert into `login` (username,password,email) values('$username','$password','$email')");
    if ($result) {
        header('location: index.php');
        echo "<script>alert('Registerd SucessFully');</script>";
    } else {

    }
} else {
    //$display_message[] = 'can not be empty';
}
if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    unset($_SESSION['username']);
    header('Location: index.php');
    exit();
}
?>