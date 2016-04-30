<?php
require_once("include/header.php");
require_once("include/config.php");
function get_post($var)
{
return mysql_real_escape_string($var);
}
?>
<?php 
if(isset($_POST))
{
if(isset($_POST['roll']))
{
$roll=$_POST['roll'];
}

if(isset($_POST['delete']))
{
$query = "DELETE FROM `student_info` WHERE `user_roll` =".$roll."";
mysql_query($query);
echo $roll." deleted successfully";
}

if(isset($_POST['name']))
{
if(($_POST['name'])!= NULL)
{
$name=get_post($_POST['name']);
$query = "UPDATE `student_info` SET `student_name`='".$name."' WHERE `user_roll`=".$roll."";
mysql_query($query);
}
if(($_POST['name'])== NULL)
{
	echo "No Empty field permitted";
}
}
if(isset($_POST['father_name']))
{
if(($_POST['father_name'])!= NULL)
{
$father_name=get_post($_POST['father_name']);
$query = "UPDATE `student_info` SET `father_name`='".$father_name."' WHERE `user_roll`=".$roll."";
mysql_query($query);
}
if(($_POST['father_name'])== NULL)
{
	echo "No Empty field permitted";
}
}
if(isset($_POST['hall_name']))
{
if(($_POST['hall_name'])!= NULL)
{
$hall_id=get_post($_POST['hall_name']);

$query = "UPDATE `student_info` SET `hall_id`='".$hall_id."' WHERE `user_roll`=".$roll."";

mysql_query($query);
}
if(($_POST['hall_name'])== NULL)
{
	echo "No Empty field permitted";
}
}
if(isset($_POST['email']))
{
if(($_POST['email'])!= NULL)
{
$email=get_post($_POST['email']);
$query = "UPDATE `student_info` SET `email`='".$email."' WHERE `user_roll`=".$roll."";
mysql_query($query);
}
if(($_POST['email'])== NULL)
{
	echo "No Empty field permitted";
}
}
if(isset($_POST['mobile']))
{
if(($_POST['mobile'])!= NULL)
{
$mobile=get_post($_POST['mobile']);
$query = "UPDATE `student_info` SET `mobile`='".$mobile."' WHERE `user_roll`=".$roll."";
mysql_query($query);
}
if(($_POST['mobile'])== NULL)
{
	echo "No Empty field permitted";
}
}
if(isset($_POST['password']))
{
if(($_POST['password'])!= NULL)
{
$password=get_post($_POST['password']);
$query = "UPDATE `student_info` SET `password`='".$password."' WHERE `user_roll`=".$roll."";
mysql_query($query);
}
if(($_POST['password'])== NULL)

{
	echo "No Empty field permitted";
}
}
}

if(($_GET)!=NULL)
{

$roll = get_get($_GET['roll']);
$query = "SELECT a.student_name,a.father_name,a.hall_id, b.hall_name,a.email,a.mobile,a.user_roll,a.password FROM student_info a join hall_info b on a.hall_id=b.hall_id WHERE  a.user_roll =".$roll."";
$result=mysql_query($query);
$rows  = mysql_num_rows($result);

echo "<div class='main'>";
echo "<div class='bood_medi_11'>";


while($row = mysql_fetch_assoc($result))
{
echo"
<form class='form2' method='post' action=''>
<label>Name :</label>
<input type='text' name='name' value='".$row['student_name']."' >
<label>Father Name :</label>
<input type='text' name='father_name' value='".$row['father_name']."' >
<label>Hall Name :</label>
<select name='hall_name'>
<option selected type='text' name='hall_name' value='".$row['hall_id']."' >".$row['hall_name']."</option>
";

$query = "SELECT `hall_id`, `hall_name` FROM `hall_info` WHERE `hall_id` not in('".$row['hall_id']."')";
 
echo $query;
$result = mysql_query($query);
while($row2 = mysql_fetch_assoc($result))
{
echo"
<option type='text' value='".$row2['hall_id']."' >".$row2['hall_name']."</option>
";
}
echo" 
</select>
<br>
<label>Email :</label>
<input type='text' name='email' value='".$row['email']."' >
<label>Mobile :</label>
<input type='text' name='mobile' value='".$row['mobile']."' >
<input type='hidden' name='roll' value='".$row['user_roll']."' >
<label>Password :</label>
<input type='text' name='password' value='".$row['password']."' >
<input  type='submit' name='update' id='register' value='UPDATE'>
<input  type='submit' name='delete' id='register' value='DELETE'>

</form>
";

}
}
mysql_close($con);
?>
<?php 
require_once("include/footer.php");
?>