<?php
require_once("include/header.php");
require_once("include/config.php");
?>
 <?php
if(($_POST['student_name']!=NULL) && 
  (($_POST['father_name'])!=NULL)&& 
   (($_POST['hall_id'])!=NULL)&& 
   (($_POST['blood'])!=NULL)&& 
   (($_POST['sex'])!=NULL)&& 
  (($_POST['email'])!=NULL)&& 
   (($_POST['mobile'])!=NULL)&& 
   (($_POST['user_roll'])!=NULL)&& 
   (($_POST['password'])!=NULL)&& 
  (($_POST['cpassword'])!=NULL))
{
	$name = $_POST['student_name'] ;
	$faname = $_POST['father_name'];
	$hallname = $_POST['hall_id'];
	$blood_group = $_POST['blood'];
	$sex =$_POST['sex'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
    $user_roll = $_POST['user_roll'];
	$password = $_POST['password'];
	$cpassword =$_POST['cpassword'];
}
else
{
die('<b>  Please fill up the form  properly:</b>');
}
$password1=strlen($_POST["password"]);

// About Password
if($password1<6)
{
	die('<b>Pawwword lenth minimum will be 6 digits.</b>');
}

if(($_POST["password"]) <> ($_POST["cpassword"]))
{
	die('<b>Password Mismatch.</b>');
}

$roll = $_POST['user_roll'];

$result=mysql_query("SELECT user_roll FROM student_info WHERE user_roll='$roll'");
$count = mysql_num_rows($result);
if($count > 0)
{
	while ($row=mysql_fetch_array($result))
{
	echo "User-roll ". $row['user_roll']. " " . " already exists.". "<br/>";
	
} 
    exit;
}

$sql = "INSERT INTO student_info(student_name, father_name, hall_id, blood,sex, email, mobile, user_roll, password )
VALUES"."('$name','$faname','$hallname','$blood_group','$sex','$email','$mobile','$user_roll','$password')";

if(!mysql_query($sql,$con))
{
	die('Error:'.mysql_error());
}
Header ("Location: index.php");
echo "<b>$_POST[name]  Registration Successfully.<b>"."<br>";
echo "<b>Now you are a registered member.<b>";

mysql_close($con);

?>
<?php
require_once("include/footer.php");
?>
