<?php
  session_start();

/*proces loggu (musim dodelat a poresit co a  jak)*/

    if(isset($_SESSION["isLogged"])){
        $isLogged = $_SESSION["isLogged"];
    }
    else{
        $isLogged = false;
    }
?>



<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moon</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- jQuery -->
    <script src="https://kit.fontawesome.com/a88d994df8.js" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
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
        <button class="log"><a class="loga" href="login.php">Log In</a></button>
        <button class="reg"><a class="rega" href="signup.php">Register</a></button>

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
    <div class="feedbar"></div>
        <div class="feed">
            <div class="post">
                <html lang="en">
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
    $html .= '</div>';
}

// Insert the HTML into the feed div
echo "<div class='post'>$html</div>";
?>
            <div class="post">
                <h1 class="nazev"></h1>
                <p class="text"></p>
            </div>   
            
            
        </div>
    </div>















    <!--
    <script>
      // Retrieve the latest post data from the server using AJAX
      $.get("/getLatestPost.php", function(data) {
          // Parse the JSON data
          const post = JSON.parse(data);
          
          // Create a new post element with the given data
          const postElement = `
            <div class="post">
              <h2 class="post-title">${post.title}</h2>
              <p class="post-text">${post.text}</p>
            </div>
          `;
          
          // Append the new post element to the HTML body
          $("body").append(postElement);
        });
          </script>-->
</body>
</html>