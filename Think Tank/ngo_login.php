<?php
session_start();
error_reporting(0);
$call=new NGOlogin;
$call->verifyCredentials();
class NGOlogin{
	public function verifyCredentials(){
		$mysql_host="localhost";
		$mysql_user='root';
		$mysql_password='';
		if(!@mysql_connect($mysql_host,$mysql_user,$mysql_password))
		{
			echo("cannot connect to database");
		}
		else{
			if(@mysql_select_db("ngo")){
				$user=$_POST["username"];
				$pass=$_POST["password"];
				$flag=0;
				$querydb="select username,password from `ngodetails`";
				$result=mysql_query($querydb);
				$count=mysql_num_rows($result);
			if($count>0){
				while($row=mysql_fetch_assoc($result)){
					if($row["username"]=== $user  && $row["password"]===$pass ){
						$userlogin=new NGOlogin;
						$userlogin->login();
						$flag=1;
						break;
					}	
				}
				if($flag===0){
					header( "refresh:3; url=ngologin.php" );
					echo "Wrong Email/Password!!!!!";
				}
			}
			else{
				echo "No Records found!!!!!";
				}
			}
		else{
			echo('cannot connect to database');
			//header ("Location: Signup-login.php");
			}	
		}
}
	
	public function login(){
		$_SESSION['id']=$row['username'];
		header( "refresh:5; url=view.php" );
		echo 'Successfully Logged In</br>!!!';
	}
	
}	

?>