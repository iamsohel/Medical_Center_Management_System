<?php
require_once("include/header.php");
?>


<div fix class="main">
<div class="reg3">

<h2 color="#0000ff">Admin Registration Form :</h2>
<form class="form2" method="post" action="adminregis_valid.php">
<label>Name :</label>
<input type="text" name="name" id="name"size="30" maxlength="80" >
<label>Admin Id :</label>
<input type="text" name="user_id" id="name"size="30" maxlength="80" >

<label>Email :</label>
<input type="text" name="email" id="email"size="30" maxlength="80" >

<label>Password :</label>
<input type="password" name="password" id="password"size="30" maxlength="80" >
<label>Confirm Password :</label>
<input type="password" name="cpassword" id="cpassword"size="30" maxlength="80" >
<input type="submit" name="register" id="register" value="Register">
<input class="btn" type="reset" name="reset" id="reset" value="Reset">
</form>
</div>
</div>


<?php 
require_once("include/footer.php");
?>
