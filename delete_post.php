<?php
include 'connection.php';

if(isset($_POST['id_post'])){
    $post_id = $_POST['id_post'];
    $sql = "DELETE FROM post WHERE id_post = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);
    if($stmt->execute()) {
        echo "Post deleted successfully";
    } else {
        echo "Error deleting post: " . $conn->error;
    }
    $stmt->close();
}
?>