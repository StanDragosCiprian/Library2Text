<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="Your name">
<title>Bibleoteca</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="corp">

<div id="headi">
<a href="FirstPage.php"><img src="Logo.svg" alt="Logo" id="biblog"></a>
<p id="login"><a href="http://localhost/sigin.php">Log In</a></p>
<p id="signin"><a href="http://localhost/login.php">Sign In</a></p>
</div>
<?php
include "conect.php";

$zz=$_GET['variableName'];
$sql2 = "SELECT * from book WHERE  id=$zz";

$result = $conn->query($sql2); 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	    $Titl=$row["Titlu"]." ";
	  $Autor=$row["Autor"]." ";
	  $Categ=$row["Categorie"]." ";
	  $Editu=$row["Editura"]." ";
	  $Anapar=$row["An Aparitie"]." ";
	  $Imag=$row["Imagini"]." ";
	  $Titl2=$row["Titlu 2"]." ";
	  $CarInp=$row["Carti Inprumutater"]." ";
	  $id=$row["id"];
	   echo "
	   <div>
	   <img src=\"$Imag\" alt=\"img-1\" id=\"BookPageImage\">
	   <p id=\"BookPageTitle\">$Titl2</p>
	   <p id=\"BookPageAutor\">Autor:$Autor</p>
	   <p id=\"BookPageCategorie\">Categorie:$Categ</p>
	   <p id=\"BookPageEditura\">Editura:$Editu</p>
	   <p id=\"BookPageAnAparitie\">An Aparitie:$Anapar</p>
	   </div>
	   ";
  }
}
?>
</body>
</html>