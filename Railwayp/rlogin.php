<!DOCTYPE html>
<html>
    <head>
        <title>RMS LOGIN- Indian Railways</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:wght@600&display=swap">
    </head>
    <body>
        <form method="post" action="index.php" onsubmit="verifyCredentials()">
    
        <div class="loginheader"> 
            <h1>Indian Railways</h1>
        </div>
        <div class="loginbody">
                <div>
                <label for="" style="font-family: 'Abadi', sans-serif; font-size: 16px; color: #f4f4f4;">Username</label>
                    <input type="text" id="Username">
                </div>
                <div>
                <label for="" style="font-family: 'Abadi', sans-serif; font-size: 16px; color:#f4f4f4;">Password</label>
                    <input type="password" id="password">
                </div>
                <div>
                    <button type="submit"><span>Login</span></button>
                    <a href="register.php">Register</a>
                </div>
            </form>
            <script>
    function verifyCredentials() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;


      if (username === "admin" && password === "admin") {
        alert("Login successful!");
        window.location.href = "index.php"
      } else {
        
        alert("Incorrect username or password. Please try again.");
        event.preventDefault();
      }
    }
  </script>
        </div>
    </body>
</html>