<?php
include "conect.php";
$sql = "SELECT * FROM log";

$result = $conn->query($sql);
$za=0;
$i="";
$idz="";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $ep[]=$row["Email"].$row["Passwold"];
	$Num=$row["Nume"];
	$Pre=$row["Prenume"];
	$Em=$row["Email"];
	$Par=$row["Passwold"];
	$id=$row["id"];
	$image=$row["Image"];
	if(isset($_POST["submit"])){
$Email=$_POST["Email"];
$Passworld=$_POST["Passworld"];
$EP=$Email.$Passworld;
$idz=$id;
	if($EP==$ep[$za]){
	 $_SESSION['Name']=$Num;
     $_SESSION['Pren']=$Pre;
	 $_SESSION['E-mail']=$Em;
	 $_SESSION['Pass']=$Par;
	 $_SESSION['id']=$id;
	 $_SESSION['img']=$image;
		header("Location:Profil.php");
		
		break;
		
	}
	$za++;
}
  }
} else {
  echo "0 results";
}


?>
