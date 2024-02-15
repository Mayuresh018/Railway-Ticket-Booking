<?php
require_once "conn.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<html>';
    echo '<head>';
    echo '<title>Delete Confirmation</title>';
    echo '</head>';
    echo '<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333;">';
    echo '<h2 style="color: #990000;">Are you sure you want to delete?</h2>';
    echo '<form method="post" action="delete_process.php" style="margin-top: 20px;">';
    echo '    <input type="hidden" name="id" value="' . $id . '">';
    echo '    <input type="submit" name="confirm" value="Yes" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">';
    echo '    <button type="button" onclick="window.location.href=\'view.php\'" style="background-color: #ccc; color: #333; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">No</button>';
    echo '</form>';
    echo '</body>';
    echo '</html>';
} else {
    header("Location: view.php");
    exit();
}
?>
