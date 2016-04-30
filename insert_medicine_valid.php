<?php
require_once("include/header_c.php");
require_once("include/config.php");
?>
<?php
if(($_POST['generic_id']!=NULL) && 
  (($_POST['company_id'])!=NULL)&& 
  (($_POST['medicine_name'])!=NULL))
{
$generic_id = $_POST['generic_id'] ;
$company = $_POST['company_id'];
$medicine_name = $_POST['medicine_name'];
}
else
{
die('<b>  Please Input correctly:</b>');
}

$sql = "INSERT INTO medicine_info(generic_id,company_id, medicine_name )
VALUES"."('$generic_id','$company','$medicine_name')";

if(!mysql_query($sql,$con))
{
	die('Error:'.mysql_error());
}
echo<<<_END
<div fix class='main'>
<div fix class='main_b'>
_END;
echo "<b>Insert Successful<b>";
echo<<<_END
</div>
</div>
_END;

mysql_close($con);
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}

?>
<?php 
require_once("include/footer.php");
?>
