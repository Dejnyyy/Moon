<?php
session_start();
include 'connection.php';

if(isset($_POST['e-mail']) && isset($_POST['password'])){
    $username = mysqli_real_escape_string($conn, $_POST['e-mail']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = SHA1('$password')";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['username'] = $row['username'];
        header("Location: adminPage.php");
        exit();
    }
    else{
        header("Location: index.php?error=Invalid username or password");
        exit();
    }
}
?>
