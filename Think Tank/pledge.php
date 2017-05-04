<!DOCTYPE html>
<html>
<style>

</style>
<head>
</head>
<body>
<center>
<fieldset style="width:50px"><legend><b><i>Donor Info<i><b></legend>
<form action="makepledge.php" method="POST">


  <input type="text" name="name" placeholder="Fullname" required>
  <br>
  <input type="text" name="email" placeholder="Email Address" required>
  <br>
  <input type="text" name="contact" placeholder="contact" required>
  <br>
  <input type="textarea"  name="address" placeholder="Address" required>
  <br>
   <input type="text"  name="pin" placeholder="Enter zipcode" required maxlength="6">
  <br>
  
      
                <input type="textarea"  name="item" placeholder="Item " required />
				</br>
                <input type="text"  name="quantity" placeholder="quantity" required  />
           
  <br><br>
  
  <input type="submit" value="Submit">
</form> 
</fieldset>


</body>
</html>
