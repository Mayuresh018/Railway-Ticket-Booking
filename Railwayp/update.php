<?php
require_once "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $id = $_POST['id'];
    $t_name = $_POST['t_name'];
    $sour = $_POST['sour'];
    $dest = $_POST['dest'];
    $tickets = $_POST['tickets'];
    $sql = "UPDATE railwayres SET t_name='$t_name', sour='$sour', dest='$dest', tickets='$tickets' WHERE t_id='$id'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$id = $_REQUEST['id'];
$sql = "SELECT * from railwayres where t_id='" . $id . "'";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
?>

<html>

<body>
    <form method="post" action="update.php">
    <link rel="stylesheet" type="text/css" href="css/add.css">
        <input type="hidden" name="id" value=<?php echo $_REQUEST["id"]; ?>>
        <label>Trains:</label>
       <select id="t_name" name="t_name" required>
			<option selected disabled>-------------------Select trains here----------------------</option>
			<option value="Goa Express" value="Goa Express" <?php if($row['t_name']=="Goa Express") {echo "checked";}?>> Goa Express - Margao to Belgaum </option>
			<option value="Nizamuddin Express" <?php if($row['t_name']=="Nizamuddin Express") {echo "checked";}?>> Nizamuddin Express - Mumbai to Delhi </option>
			<option value="Tejas" <?php if($row['t_name']=="Tejas") {echo "checked";}?>>Tejas - Pune to Kerala </option>
			<option value="Rajdhani Express"  Rajdhani Express> Rajdhani Express - Mumbai to Mysore JN </option>
		</select>
    <br>
 <label>Source:</label>
 <select id="sour" name="sour" required>
			<option value="Margao" <?php if($row['sour']=="Margao") {echo "checked";}?> >Margao</option>
			<option value="Mumbai"  <?php if($row['sour']=="Mumbai") {echo "checked";}?> >Mumbai</option>
			<option value="Pune"  <?php if($row['sour']=="Pune") {echo "checked";}?>>Pune</option>
			<option value="Mahabaleshwar"   <?php if($row['sour']=="Mahabaleshwar") {echo "checked";}?>>Mahabaleshwar </option>
			<option value="Goa"  <?php if($row['sour']=="Goa") {echo "checked";}?>>Goa</option>
			<option value="mysuru"  <?php if($row['sour']=="mysuru") {echo "checked";}?>>Mysuru JN</option>
			<option value="Hudpi"  <?php if($row['sour']=="Hudpi") {echo "checked";}?>>Hudpi</option>
			<option value="Vadodara"  <?php if($row['sour']=="Vadodara") {echo "checked";}?>>Vadodara</option>
		</select>
    <br>
 <label>Destination:</label>
 <select id="dest" name="dest" required>
			<option value="Belgaum" <?php if($row['dest']=="Belgaum") {echo "checked";}?> >Belgaum</option>
			<option value="Delhi"  <?php if($row['dest']=="Delhi") {echo "checked";}?>>Delhi</option>
			<option value="Kerala" <?php if($row['dest']=="Kerala") {echo "checked";}?>>Kerala</option>
			<option value="Mysore JN" <?php if($row['dest']=="Mysore JN") {echo "checked";}?> >Mysore JN </option>
			<option value="Surat" <?php if($row['dest']=="Surat") {echo "checked";}?>>Surat</option>
			<option value="Ratlam"<?php if($row['dest']=="Ratlam") {echo "checked";}?> >Ratlam</option>
			<option value="Sangli"<?php if($row['dest']=="Sangli") {echo "checked";}?> >Sangli</option>
			<option value="Satara"<?php if($row['dest']=="Satara") {echo "checked";}?> >Satara</option>
		</select>
    <br>
 <label for="tickets">No of Tickets:</label>
  <select name="tickets" id="tickets">
    <option value="1" <?php if($row['tickets']=="1") {echo "checked";}?>>1</option>
    <option value="2"  <?php if($row['tickets']=="2") {echo "checked";}?>>2</option>
    <option value="3"  <?php if($row['tickets']=="3") {echo "checked";}?>>3</option>
    <option value="4"  <?php if($row['tickets']=="4") {echo "checked";}?>>4</option>
    <option value="5"  <?php if($row['tickets']=="5") {echo "checked";}?>>5</option>
    <option value="6"  <?php if($row['tickets']=="6") {echo "checked";}?>>6</option>
  </select>
  <br><br>

        <input type="submit" name="submit" value="submit"><br>
        <a href="view.php">Menu</a><br><br>
    </form>
</body>

</html>
