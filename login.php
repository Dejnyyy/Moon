<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrace a přihlášení</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="container">
      <div class="div"></div>
      <h2>Log in</h2>
      <form id="loginForm" class="loginForm" method="post" action="loginCheck.php">
        <div class="form-group">
            <input type="e-mail" class="form-control"placeholder="e-mail" id="e-mail" name="e-mail" required>
          </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="password"id="password" name="password" required>
        </div>
        <button type="submit" class="btn"><a class="btna" href="index.php">Home</a></button>
        <input type="submit"  class="btn1 "value="Login">

      </form>
    </div>
   </body>
</html>