<?php
    $conn = new mysqli("localhost", "root", "", "moon");
    
    if ($conn->connect_error) {
        /*die("Connection failed: " . $conn->connect_error);
     */echo "Nastala chyba neumíte pracovat s DB: ".$connect->connect_error;
    }else{}    
?>
