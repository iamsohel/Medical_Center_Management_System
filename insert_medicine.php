<?php
require_once("include/header_c.php");
?>
<?php
{
echo <<<_END
<div class="main">
<div class="admin_in">
<div class="amin_medicine_para_insert"><div class="reg2_insert">
<h2 color="#0000ff"> Insert Medicine :</h2>
<form class="form2" method="post" action="insert_medicine_valid.php">
<label>Generic Name :</label>
<select name="generic_id" id="" size="1" >
<option value=" ">Select...</option>
<option value="a">Anti-Biotic</option>
<option value="b">Paracetamol</option>
<option value="m">Metronidazole</option>
<option value="i">Itraconazole</option>
<option value="t">Terbinafine</option>
</select><br>
<label>Medicine Name :</label>
<input type="text" name="medicine_name" id="password"size="100" maxlength="100" >
<label for="blood_group">Company Name :</label>
<select name="company_id" id="" size="1" >
<option value=" ">Select...</option>
<option value="a">Square Pharmacy</option>
<option value="b">Beximco Pharmacy</option>
<option value="c">Renata Pharmacy</option>
<option value="d">Opsonin Pharmacy</option>
<option value="e">ACI Pharmacy</option>
<option value="f">ACME Pharmacy</option>
</select><br>
<input type="submit" name="register" id="register" value="Insert">
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
