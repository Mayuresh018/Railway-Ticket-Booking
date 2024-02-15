<?php
 require_once "conn.php";
 if(isset($_POST['submit'])){
 $t_name=$_POST['t_name'];
 $sour=$_POST['sour'];
 $dest=$_POST['dest'];
 $tickets=$_POST['tickets'];
 if($t_name !="" && $sour !="" && $dest !=""  && $tickets !="" ){
 $sql = "INSERT INTO railwayres (t_name, sour, dest, tickets)
 VALUES('$t_name','$sour','$dest','$tickets')";
 if(mysqli_query($conn,$sql)){
 echo "<script>alert('Ticket Booked successfully');window.location.href='index.php';</script>";
 }
 else{
 echo mysqli_error($conn);
 }
 } else{
 echo "<script>alert('Values cannot be empty');window.location.href='index.php';</script>";
 }
 }
?>