<?php
require_once("include/header_c.php");
?>
<?php
{
echo <<<_END
<div class="main">
<div class="admin_in">
<div class="amin_medicine_para_insert"><div class="reg2_insert">
<h2 color="#0000ff">Enter Medicine name for delete medicine from Database :</h2>
<form class="form2" method="post" action="delete_medicine_valid.php">
<label>Medicine Name :</label>
<input type="text" name="generic_name" id="name"size="100" maxlength="100" >
<input type="submit" name="register" id="register" value="Delete">
<input class="btn" type="reset" name="reset" id="reset" value="Reset">
</form>
</div>
</div</div>
</div>
</div>
_END;

}
?>
<?php 
require_once("include/footer.php");
?>
