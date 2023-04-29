<?php
// Start the session (if it hasn't already been started)
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}
// Get the username from the session variable
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Page</title>
</head>
<body>
    <!-- Rest of your HTML and PHP code for the admin page -->
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- jQuery -->
    <script src="https://kit.fontawesome.com/a88d994df8.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
   window.onload = function() {
        var feed = document.querySelector('.feed');
        addHeight(feed);
   }
</script>
</head>
<body>

<?php
    include "connection.php";
    include "emailregex.php";
    ?>
    <div class="topnav">
        <a><img class="icon" src="image-removebg-preview.png" alt="icon"></a>
        <div class="iconMoon"><p>Moon</p></div>

        <div class="space"></div>
        <a  class="search" target="_blank">
            <i class="fa-solid fa-magnifying-glass fa-xl " style="color:#5203ab;"></i>
        </a>
        <form action="index.php" method="post">
        <input type="submit" name="logout" class="logout" class="logout"value="<?php echo $username; ?> - Odhlásit se">
        
        </form>

        <div class="logged"></div>
    </div>

    <div class="blank"></div>
    <div class="main">
        <div class="abfeedbar">
            <div class="home"><a>Home</a></div>

            <div class="mainspace"></div>
            <div class="filter">
                <a target="_blank"><img src="filter-svgrepo-com.png" style="width:25px">
            </a>
        </div>      
    </div>
        <div class="feed">
            <div class="feedbar"></div>

            <div class="post">
                <button class="postbtn"><a style="text-decoration: none" href="choose.html">+</a></button>
            </div>
            <?php
            // Connect to the database
            $host = 'localhost'; //  database host
            $dbname = 'moon'; //  database name
            $username = 'root'; // database username
            $password = ''; //  database password
            $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            // Retrieve all the posts from the database, ordered by date
            $stmt = $db->prepare('SELECT * FROM post ORDER BY created_at DESC');
            $stmt->execute();
            $posts = $stmt->fetchAll();
            // Generate the HTML for all the posts
            $html = '';
            foreach ($posts as $post) {
                 $html .= '<div class="post">';
                $html .= '<h1 class="nadpis">' . $post['nadpis'] . '</h1>';
                $html .= '<p class="text">' . $post['text'] . '</p>';
                $html .= '<p class="created_at">' . $post['created_at'] . '</p>';
                $html .= '<br>';
                $html .= '</div>';
                echo "<div class='post'>$html</div>";
                $html = '';
            }
            ?>
        </div>
    </div>
</body>
</html>
