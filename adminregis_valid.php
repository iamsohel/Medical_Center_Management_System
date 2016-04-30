<?php
require_once("include/header.php");
require_once("include/config.php");
?>
 <?php

 if(
  (($_POST['user_id'])!=NULL)&& 
   (($_POST['email'])!=NULL)&& 
  (($_POST['password'])!=NULL)&& 
   (($_POST['cpassword'])!=NULL)&& 
   (($_POST['name'])!=NULL) )
{
	$admin_name = $_POST['name'] ;
	$admin_id = $_POST['user_id'];
	$email = $_POST['email'];
    $password = $_POST['password'];
	$cpassword =$_POST['cpassword'];
}
else
{
die('Please fill up the form properly:');
}
$password1=strlen($_POST["password"]);

if($password1<6)
{
	die('Pawwword lenth minimum will be 6 digits.');
}

if(($_POST["password"]) <> ($_POST["cpassword"]))
{
	die('Pawwword Mismatch.');
}

$roll = $_POST['user_id'];

$result=mysql_query("SELECT user_id FROM admin_info WHERE user_id='$roll'");
$count = mysql_num_rows($result);
if($count > 0)
{
	while ($row=mysql_fetch_array($result))
{
	echo "User_id ". $row['user_id']. " " . " already exists.";
} 
    exit;
}

$sql = "INSERT INTO admin_info(name, user_id,email, password)
VALUES"."('$admin_name','$admin_id','$email','$password')";

if(!mysql_query($sql,$con))
{
	die('Error:'.mysql_error());
}
echo<<<_END
<div fix class='main'>
<div fix class='main_b'>
_END;
echo "$_POST[name] ,Your admin Registration is Successfull.";

echo<<<_END
</div>
</div>
_END;

mysql_close($con);

?>
<?php
require_once("include/footer.php");
?>
