<?php
require_once("include/header.php");
?>
<?php
if(isset($_SESSION['valid_user']))
{
echo <<<_END
<div fix class='main'>
<div fix class='form'>
<form method='post' action='blood and hall_valid.php'>
<fieldset class='account-info1'>
<label for="blood_group">Hall Name :</label>
<select name="hall_id" id="" size="1" >
<option value=" ">Select...</option>
<option value="b">Shahid Tareq Huda Hall</option>
<option value="c">Shahid Mohammad Shah Hall</option>
<option value="d">Bangabandhu Hall</option>
<option value="a">Dr.Qudrate-E-Khuda Hall</option>
<option value="e">Sufia Kamal Hall</option>
</select><br>
<label for='blood_group'>Blood Group :</label>
<select name='blood' id='blood_gropu' size='1' >
<option value=' '>Select...</option>
<option value='A+'>A+</option>
<option value='A-'>A-</option>
<option value='B+'>B+</option>
<option value='B-'>B-</option>
<option value='O+'>O+</option>
<option value='O-'>O-</option>
<option value='AB+'>AB+</option>
<option value='AB-'>AB-</option>
</select><br>
  </fieldset>
  <fieldset class='account-action1'>
   <label>
    <input class='btn1' type='submit' name='submit' value='Search'>
   </label>
  </fieldset>
</form>
</div>
</div>
_END;
}
else
{
echo<<<_END
<div fix class='main'>
<div fix class='main_b'>
_END;
echo"Whoops! No. You have to login first";
echo<<<_END
</div>
</div>
_END;
}
?>
<?php 
require_once("include/footer.php");
?>