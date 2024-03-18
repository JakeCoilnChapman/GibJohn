
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="\Gibjohn/css/LoginForm.css">
</head>
<body> 




<div id="LoginForm" class="modal">
  
  <form class="modal-content animate" action="\Gibjohn/ServerScripts/LoginScript.php" method="post">
    <div class="container">
      <label for="Email"><b>Email:</b></label>
      <input type="Email" placeholder="Enter Email" name="Email" required>

      <label for="password"><b>Password</b></label>
      <input type="Password" placeholder="Enter Password" name="Password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('LoginForm').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>