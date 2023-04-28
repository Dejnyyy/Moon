<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registrace</title>
    <link rel="stylesheet" href="signup.css">
   
  </head>
  <body>
    <div class="container">
      <div class="div"></div>
      <h2>Sign up</h2> 
      <form id="registerForm" class="registerForm" method="Post" action="registration.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="name" id="name" name="name" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="surname" id="surnameName" name="surname" required>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="username" id="username" name="username" required>
        </div>

        <div class="form-group">
          <input type="password" class="form-control" placeholder="password"id="password" name="password" required>
        </div>
        
        <div class="form-group">
          <input type="password" class="form-control" placeholder="conf password"id="confirmPassword" name="confirmPassword" required>
        </div>
        
        <div class="form-group">
          <input type="e-mail" class="form-control"placeholder="e-mail" id="e-mail" name="email" required>
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control" placeholder="control Question" id="con_question" name="con_question" required>
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control" placeholder="control Answer" id="controlanswer" name="con_answer" required>
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" placeholder="note" id="note" name="note">
        </div>
        
        <button type="submit" class="btn"><a class="btna" href="index.php">Home</a></button>
       <input type="submit"class="btn1"class="btn1a"  onclick="return checkPasswordMatch();"onclick="return validateEmail(e-mail)" value="Sign up">
      </form>
    </div>
    <script>
function checkPasswordMatch() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    return true;

    function validateEmail(e-mail) {
        return String(email).match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);
    }
}
</script>
   </body> 
</html>
