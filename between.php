<?php
require_once("include/header.php");
?>
<?php
if(isset($_SESSION['valid_user']))
{
echo <<<_END
<div fix class='main'>
<div class ="bt_roll"> Enter Roll Range</div>
<div fix class='form_bt'>
<form method='post' action='between_valid.php'>
<fieldset class='account-info1'>
<label>Start Roll  :</label>
<input type="text" name="roll_1" id="password"size="100" maxlength="100" >
<label> End Roll  :</label>
<input type="text" name="roll_2" id="password"size="100" maxlength="100" >
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