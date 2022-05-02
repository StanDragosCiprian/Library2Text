<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="corp">
<?php 
include "signinconect.php";
?>
<div id="headi2">
<a href="FirstPage.php"><img src="Logo.svg" alt="Logo" id="biblog"></a>
<p id="login"><a href="sigin.php">Log In</a></p>
<p id="signin"><a href="login.php">Sign In</a></p>
</div>
<div id="logblock">

<form class="" action="" method="post" autocomplete="off" >
<div class="sing">
<h1>Log In</h1>
</div>

<div class="input">
<input type="text" name="Email" required value="" placeholder="E-mail">
</div>
<div class="input">
<input type="password" name="Passworld" required value="" placeholder="Passworld">
</div>
<div class="cend">
<a href="Profil.php"><button type="submit" name="submit">Trimite</button></a>
</div>
</form>
</div>
<div>
<img src="LogBack.jpg" alt="Logo" id="background-img">
</div>
</body>

</html>