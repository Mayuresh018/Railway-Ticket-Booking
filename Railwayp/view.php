<?php
require_once "conn.php";
$sql = "SELECT * FROM railwayres";
$result = mysqli_query($conn,$sql);
?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/view.css">
 </head>
 <body>
 <table border="1" cellspacing="0">
 <tr>
 <th>Id</th>
 <th>Train Name</th>
 <th>Source</th>
 <th>Destination</th>
 <th>No of Tickets</th>
 <th>Actions</th>
 </tr>
 <?php
 if(mysqli_num_rows($result)>0){
 while($row = mysqli_fetch_assoc($result)){
 echo '<tr>
 <td>'.$row["t_id"].'</td>
 <td>'.$row["t_name"].'</td>
 <td>'.$row["sour"].'</td>
 <td>'.$row["dest"].'</td>
 <td>'.$row["tickets"].'</td>
 <td><a href="update.php?id='.$row["t_id"].'">Edit</a>/<a 
href="delete.php?id='.$row["t_id"].'">DELETE</a>
 <tr>'; 
 }
 }else{
 echo "0 results";
 }
 mysqli_close($conn)
 ?>
 </table>
 <a href="index.php">Menu</a>
 </body>
</html>