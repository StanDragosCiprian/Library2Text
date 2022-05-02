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
include "bookselect.php";
?>

<section>
<div id="RightBlue">
<h5>
Carti
</h5>
</div>
</section>
</div>

<div id="Carti"><h5>Cartii</h5></div>
<div class="custom-select" style="width:200px;">
  <select>

    <option value="0">Select car:</option>
    <option value="1">Audi</option>
    <option value="2">BMW</option>
    <option value="3">Citroen</option>
    <option value="4">Ford</option>
    <option value="5">Honda</option>
    <option value="6">Jaguar</option>
    <option value="7">Land Rover</option>
    <option value="8">Mercedes</option>
    <option value="9">Mini</option>
    <option value="10">Nissan</option>
    <option value="11">Toyota</option>
    <option value="12">Volvo</option>
  </select>
</div>
<div id="zonz">
<div class="gallery">
<?php

include "signinconect.php";
$id= $_SESSION['id'];
echo $id;
$sql = "SELECT * FROM book";

$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  $Titl=$row["Titlu"]." ";
	  $Autor=$row["Autor"]." ";
	  $Categ=$row["Categoria"]." ";
	  $Editu=$row["Editura"]." ";
	  $Anapar=$row["An aparitie"]." ";
	  $Imag=$row["Imagini"]." ";
	  $Titl2=$row["Titlu 2"]." ";
	  $CarInp=$row["Carti Inprumutate"]." ";
	  $id=$row["id"];
	  echo "<div class=\"image-holder\"><a href=\"bookPage.php?variableName=$id\"><img src=\"$Imag\" alt=\"img-1\" id=\"BookImgZon\"><div id=\"pmargin\">$Titl</div></a></div>";
	
	  }
}
?>

</div>

</body>
</html>