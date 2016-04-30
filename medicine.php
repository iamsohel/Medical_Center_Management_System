<?php
require_once("include/header.php");
?>
<?php
if(isset($_SESSION['valid_user']))
{
echo <<<_END
<div fix class='main'>
<div fix class='form'>
<form method='post' action='medicine_valid.php'>
<fieldset class='account-info1'>
<label>Select Generic Name :</label>
<select name="generic_id" id="" size="1" >
<option value=" ">Select...</option>
<option value="a">Anti-Biotic</option>
<option value="b">Paracetamol</option>
<option value="i">Itraconazole</option>
<option value="t">Terbinafine</option>
<option value="m">Metronidazole</option>
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