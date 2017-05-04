<?php
$filter=new Filter;
$filter->filterResult();
class Filter{
function filterResult(){
	echo"<html>
	<head></head>
	<body>
      <table border=\"2\" style= \"background-color: #84ed86; color: #761a9b; margin: 0 auto;\" >
      <thead>
        <tr>
		  <th>Name</th>
          <th>Email</th>
          <th>Contact</th>
		  <th>Address</th>
          <th>Pincode</th>
          <th>Item</th>
		  <th>Quantity</th>
        </tr>
      </thead>
      <tbody>";
	  
      include_once("filter.php");
      echo"</tbody>
    </table>
</body>
<html>";
}
}
?>