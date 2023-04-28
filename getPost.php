<?php
// Connect to database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Retrieve post data from database
$post_id = $_GET["post_id"];
$sql = "SELECT * FROM posts WHERE id = $post_id";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>