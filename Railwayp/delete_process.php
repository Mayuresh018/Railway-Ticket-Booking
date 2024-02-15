<?php
require_once "conn.php";

if(isset($_POST['id'])) {
    $id = $_POST['id'];

    // Validate or sanitize the ID as needed

    // Perform the deletion
    $sql = "DELETE FROM railwayres WHERE t_id=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        // Handle the error, you might want to display an error page or redirect to view.php
        die('Error in preparing the delete statement: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        // Deletion successful
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        // Redirect back to view.php after deletion
        header("Location: view.php");
        exit();
    } else {
        // Deletion failed
        // You might want to display an error message or redirect to view.php
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        die('Error in executing the delete statement: ' . mysqli_error($conn));
    }
} else {
    // If the 'id' parameter is not set, redirect to view.php
    header("Location: view.php");
    exit();
}
?>
