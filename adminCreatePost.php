<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrace a přihlášení</title>
    <link rel="stylesheet" href="createPost.css">
  </head>
  <body>
    <div class="container">
      <div class="div"></div>
      <h2>Create Post</h2>
      <form id="createPostForm" class="createPostForm" method="post" action="registerAdminPost.php" >
        <div class="form-group">  
            <input type="text" class="form-control"placeholder="nadpis" id="nadpis" name="nadpis" required>
          </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="text"id="text" name="text" required>
        </div>
        <button type="submit" class="btn"><a class="btna" href="index.php">Home</a></button>
        <input type="submit" class="btn1"  value="Create Post">
      </form>
    </div>
   </body>
</html>