<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]);

    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','railwaymanagement');
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn === false) {
        die("ERROR: Could not connect." . mysqli_connect_error());
    }
    try {
        
        $stmt = $conn->prepare("INSERT INTO register (username, email, phone, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $username, $email, $phone, $password);
        $stmt->execute();
        $stmt->close();
        mysqli_close($conn);
        header("Location: rlogin.php");
        exit();
    } catch (Exception $e) {
        
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: register.php");
    exit();
}
?>
