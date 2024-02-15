<!DOCTYPE html>
<html>

<head>
    <title>RMS REGISTER - Railway Management System</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:wght@600&display=swap">
    <script src="register.js" defer></script>
</head>

<body>
    <form method="post" action="register_process.php" onsubmit="registerUser()">

        <div class="loginheader">
            <h1>RAILWAY MANAGEMENT SYSTEM</h1>
        </div>
        <div class="loginbody">
            <div>
                <label for="" style="font-family: 'Abadi', sans-serif; font-size: 16px; color: #f4f4f4;">Username</label>
                <input type="text" name="username" id="registerUsername" >
            </div>
            <div>
                <label for="" style="font-family: 'Abadi', sans-serif; font-size: 16px; color: #f4f4f4;">Email </label>
                <input type="email" name="email" id="registeremail" >
            </div>
            <div>
                <label for="" style="font-family: 'Abadi', sans-serif; font-size: 16px; color: #f4f4f4;">Phone</label>
                <input type="text" name="phone" id="registerphone" >
            </div>
            <div>
                <label for="" style="font-family: 'Abadi', sans-serif; font-size: 16px; color:#f4f4f4;">Password</label>
                <input type="password" name= "password" id="registerPassword" >
            </div>
            <div>
                <button type="submit"><span>Register</span></button>
                <a href="rlogin.php">Back to Login</a>
            </div>
        </div>
    </form>
    <script>
        function registerUser() {
            var username = document.getElementById("registerUsername").value;
            var password = document.getElementById("registerPassword").value;

            // Perform server-side registration logic here

            alert("Registration successful!");
            window.location.href = "index.php"; // Redirect to the login page
        }
    </script>
</body>

</html>
