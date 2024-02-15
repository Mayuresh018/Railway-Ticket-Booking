<?php
require_once "conn.php";
if(isset($_POST["submit"])){
$t_id=$_POST['t_id'];
$t_name=$_POST['t_name'];
$sour=$_POST['sour'];
$dest=$_POST['dest'];
$tickets=$_POST['tickets'];
$update = " update railwayres
set t_name= '".$t_name."', sour='".$sour."', dest= '".$dest."', tickets = '".$tickets."'WHERE t_id='".$t_id."'";
if(mysqli_query($conn, $update)){
 echo "<script>alert('Data Updated successfully');
 window.location.href='view.php';
 </script>";
}else{
 echo mysqli_error($conn);
}
}
?>