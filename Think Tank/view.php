<?php
session_start();
echo"<html>
<head>
</head>
<body>
<form action=\"donorhome.php\" method=\"POST\">
	<input type=\"submit\" name=\"view\" value=\"View Pledge\">
</form><br><br>
<form action=\"donorhome.php\" method=\"POST\">
	<input type=\"submit\" name=\"arrange_pickup\" value=\"Arrange Pick up\">
</form>
</body>
</html>";
?>
