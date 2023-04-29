<?php 
    include "connection.php";

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $email = $_POST['email'];
    $con_question = $_POST['con_question'];
    $con_answer = $_POST['con_answer'];
    $note = $_POST['note'];
    $sql = "INSERT INTO user (name, surname, username, password, email, con_question, con_answer, note) VALUES ('".$name."', '".$surname."', '".$username."', '".$password."', '".$email."', '".$con_question."', '".$con_answer."', '".$note."')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    header("Location:index.php");
    die();
    
?>  