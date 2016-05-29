<?php
require_once("include/header.php");
?>


<div fix class="main">
<div class="reg2">

<h2 color="#0000ff"> Registration Form :</h2>
<form class="form2" method="post" action="register_valid.php">
<label>Name :</label>
<input type="text" name="student_name" id="name"size="30" maxlength="80" >
<label>Father Name :</label>
<input type="text" name="father_name" id="name"size="30" maxlength="80" >
<label for="blood_group">Hall Name :</label>
<select name="hall_id" id="" size="1" >
<option value=" ">Select...</option>
<option value="b">Shahid Tareq Huda Hall</option>
<option value="c">Shahid Mohammad Shah Hall</option>
<option value="d">Bangabandhu Hall</option>
<option value="a">Dr.Qudrate-E-Khuda Hall</option>
<option value="e">Sufia Kamal Hall</option>
</select><br>
<label for="blood_group">Blood Group :</label>
<select name="blood" id="blood_gropu" size="1" >
<option value=" ">Select...</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br>
<label>Sex :</label>
<input type="radio" name="sex"value="Male" id="name">Male</input>
<input type="radio" name="sex"value="Female" id="name">Female</input><br>
<label>Email :</label>
<input type="text" name="email" id="email"size="30" maxlength="80" >
<label>Mobile No :</label>
<input type="text" name="mobile" id="email"size="11" maxlength="11" >
<label>User-Roll :</label>
<input type="text" name="user_roll" id="email"size="7" maxlength="7" >
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
