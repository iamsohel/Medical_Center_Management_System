<?php
require_once("include/header.php");
?>
<?php
if(isset($_SESSION['valid_user']))
{
echo <<<_END
<div fix class='main'>
<div fix class='form'>
<form method='post' action='self_join_6_valid.php'>
<fieldset class='account-info1'>
<label> Enter medicine Name :</label>
<input type="text" name="medicine_name" id="password"size="100" maxlength="100" >
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