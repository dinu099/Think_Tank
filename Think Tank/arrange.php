<?php
class Arrange{
function assignArea(){
	
	echo"<html>
	<head></head>
	<body>
	<form action=\"volunteer.php\" method=\"POST\">
      <table border=\"2\" style= \"background-color: #84ed86; color: #761a9b; margin: 0 auto;\" >
      <thead>
        <tr>
		  <th>Select</th>
          <th>Pincode</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>";
        include_once("file.php");
      echo"</tbody>
    </table>
	<br><br>
	<center>
		<input type=\"submit\" name=\"view\" value=\"Assign\">
	</center>
	</form>
	</body>
	<html>";
}
}
?>