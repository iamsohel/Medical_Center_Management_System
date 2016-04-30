<?php
require_once("include/header.php");
?>
<?php
if(isset($_SESSION['valid_user']))
{
echo <<<_END
<div fix class='main'>
<div fix class='form'>
<form method='post' action='medicine and company_valid.php'>
<fieldset class='account-info1'>
<label for='blood_group'>Select Medicine-Company :</label>
<select name='medicine' id='blood_gropu' size='1' >
<option value=" ">Select...</option>
<option value="a">Square Pharmacy</option>
<option value="b">Beximco Pharmacy</option>
<option value="c">Renata Pharmacy</option>
<option value="d">Opsonin Pharmacy</option>
<option value="e">ACI Pharmacy</option>
<option value="f">ACME Pharmacy</option>
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