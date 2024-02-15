<?php
 require_once "conn.php";
 $sql="CREATE TABLE patient (
 id INT(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 patientname VARCHAR(30) NOT NULL,
 email VARCHAR(50) NOT NULL,
 phone VARCHAR(30) NOT NULL,
 gender VARCHAR(30) NOT NULL)";

 if(mysqli_query($conn,$sql)){
 echo "<script>alert('Table patient created successful');window.location.href='index.php';</script>";
 }
 else{
 echo "<script>alert('error creating table: " .mysqli_error($conn)."');</script>";
 }
 mysqli_close($conn);
?>