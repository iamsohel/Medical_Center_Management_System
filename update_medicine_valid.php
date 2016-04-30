<?php
require_once("include/header_c.php");
require_once("include/config.php");
?>
<?php
if(($_POST['generic_name']!=NULL) && 
  (($_POST['appliance'])!=NULL)&&
  (($_POST['new_generic_name'])!=NULL))
{
	$generic_name = $_POST['generic_name'] ;
	$appliance = $_POST['appliance'];
	$new_generic_name = $_POST['new_generic_name'];
}

else
{
die('<b>  Please Input correctly:</b>');
}

$sql = "UPDATE generic_info SET generic_name='$new_generic_name',appliance='$appliance' WHERE generic_name='$generic_name'";

if(!mysql_query($sql,$con))
{
	die('Error:'.mysql_error()); 
}
echo<<<_END
<div fix class='main'>
<div fix class='main_b'>
_END;
echo "<b>Update Successful<b>";
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
