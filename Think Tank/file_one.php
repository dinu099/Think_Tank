<?php
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='';
	if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
	{
		echo("cannot connect to database");
	}
	else
	{
		$arr=array();
			if(!@mysql_select_db('ngo')){
				echo("No database with this name");
			}
			else{
				if(!empty($_POST['selected'])) {
					foreach($_POST['selected'] as $check) {
						array_push($arr,$check);
					}
				}
				$result=mysql_query("SELECT name,email,address FROM volunteer;");
			}
	}
	 
			  $cnt=count($arr);
			  while( $row = mysql_fetch_assoc( $result ) ){
				echo
				"<tr>
				  <td>{$row['name']}</td>
				  <td>{$row['email']}</td>
				  <td>{$row['address']}</td>
				  <td>
					<select>
						<option selected=\"selected\">Choose one</option>";
						for($i=0;$i<$cnt;$i++){
							echo "<option value=\"$arr[$i]\">$arr[$i]</option>";
						}
					echo
					"</select>
				  </td>
				</tr>\n";
			  }
        
	?>