<?php
require_once("include/header_c.php");
?>
<?php
{
echo <<<_END
<div class="main">
<div class="admin_in">
<div class="amin_medicine_para_insert"><div class="reg2_insert">
<h2 color="#0000ff"> Update Medicine :</h2>
<form class="form2" method="post" action="update_medicine_valid.php">
<label>Old Generic Name :</label>
<input type="text" name="generic_name" id="name"size="100" maxlength="100" >
<label>New Generic Name :</label>
<input type="text" name="new_generic_name" id="password"size="100" maxlength="100" >
<label>Use :</label>
<input type="text" name="appliance" id="password"size="100" maxlength="100" >
<input type="submit" name="register" id="register" value="Update">
<input class="btn" type="reset" name="reset" id="reset" value="Reset">
</form>
</div>
</div
</div>
</div>
</div>
_END;
}
?>
<?php 
require_once("include/footer.php");
?>
