<?php
require_once("include/header_c.php");
require_once("include/config.php");
?>
<?php
if(($_POST['user_id']!=NULL) && 
  (($_POST['password'])!=NULL))
  {
	$admin_id = $_POST['user_id'] ;
	$password = $_POST['password'];
	}
	else
{
die('<b>  Please fill up the form  properly:</b>');
}

$id = $_POST['user_id'];

$result=mysql_query("SELECT user_id FROM admin_info WHERE user_id='$id'");
$count = mysql_num_rows($result);
if($count > 0)
{
while ($row=mysql_fetch_array($result))
{
$_SESSION['Valid'] = $row['user_id'];
echo"<div fix class='main'>";
echo"<div fix class='main_b_ad'>";
echo "You can insert,delete and update Medicine."."<br>";
echo"</div>";
echo"</div>";
}
}
?>
<?php 
require_once("include/footer.php");
?>
