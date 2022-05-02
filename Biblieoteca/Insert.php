<?php

include "conect.php";

if(isset($_POST["submit"])){
	$Nume=$_POST["Nume"];
$Prenume=$_POST["Prenume"];
$Email=$_POST["Email"];
$Passworld=$_POST["Passwold"];
$sql = "INSERT INTO `log` (id,Nume,Prenume,Email,Passwold,Image,Book_1,Book_2,Book_3,Book_4) VALUES (NULL,'$Nume','$Prenume','$Email','$Passworld', 'z', '0', '0', '0', '0');";
$rez=mysqli_query($conn, $sql);
if ($rez) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>