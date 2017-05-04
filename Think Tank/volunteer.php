<?php
$call=new Volunteer;
$call->listVolunteer();
class Volunteer{
function listVolunteer(){
		
	echo"<html>
	<head></head>
	<body>
	<form action=\"volunteer.php\" method=\"POST\">
      <table border=\"2\" style= \"background-color: #84ed86; color: #761a9b; margin: 0 auto;\" >
      <thead>
        <tr>
		  <th>Name</th>
          <th>Email</th>
          <th>Address</th>
		  <th>Area</th>
        </tr>
      </thead>
      <tbody>";
       include_once("file_one.php");
     echo" </tbody>
    </table><br><br>
	
	<br><br>
	<center>
		<input type=\"submit\" name=\"arrange\" value=\"Next\">
	</center>
	</form>
	</body>
	<html>";
}
}
?>