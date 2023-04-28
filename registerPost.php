<?php 
    include "connection.php";

    $nadpis = $_POST['nadpis'];
    $text = $_POST['text'];
    
    $sql = "INSERT INTO post (nadpis, text) VALUES ('".$nadpis."', '".$text."')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    header("Location:index.php");
    die();
?>  