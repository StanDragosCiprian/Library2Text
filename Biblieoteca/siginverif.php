<?php
include "conect.php";
$sql = "SELECT * FROM log";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["Nume"]. " " . $row["Prenume"]. "<br>";
	
  }
} else {
  echo "0 results";
}
$conn->close();
?>