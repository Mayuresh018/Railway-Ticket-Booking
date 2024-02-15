
function registerUser() {
    var username = document.getElementById("registerUsername").value;
    var email = document.getElementById("registeremail").value;
    var password = document.getElementById("registerPassword").value;
    if (!username.trim()) {
        alert("Username cannot be empty");
        return false;
    }

    if (!email.trim()) {
        alert("Email cannot be empty");
        return false;
    }
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Invalid email format");
        return false;
    }

    if (!password.trim()) {
        alert("Password cannot be empty");
        return false;
    }

    alert("Registration successful!");
    window.location.href = "index.php"; 
    return true; 
}
