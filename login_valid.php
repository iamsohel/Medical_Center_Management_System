
<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php
if(($_POST['user_roll']!=NULL) && 
  (($_POST['password'])!=NULL))
  {
	$user_roll = $_POST['user_roll'] ;
	$password = $_POST['password'];
	}
	else
{
die('<b>  Please fill up the form  properly:</b>');
}
$roll = $_POST['user_roll'];

$result=mysql_query("SELECT user_roll FROM student_info WHERE user_roll='$roll'");
$count = mysql_num_rows($result);
if($count > 0)
{
while ($row=mysql_fetch_array($result))
{
$_SESSION['valid_user'] = $row['user_roll'];
Header ("Location: index.php");
echo"<div fix class='main'>";
echo"<div fix class='main_b'>";
echo "Login ". $row['user_roll']. " Successfully.";
echo"</div>";
echo"</div>";
}
}
?>
<?php 
require_once("include/footer.php");
?>