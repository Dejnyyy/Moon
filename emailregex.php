

<script>
function validateEmail(email) {
    return String(email).match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);
}
</script>
<?php
    include 'connection.php';

    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            echo "taken";
        } else {
            echo "free";
        }
    }
?>