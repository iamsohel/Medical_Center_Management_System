<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 

if( $_POST['blood']!=NULL ) 
    {
   $blood_group = $_POST['blood'];
	}
  else
  {
  die("You need to provide a Blood Group.");
  }

$result=mysql_query("SELECT*FROM  student_info join hall_info on student_info.hall_id=hall_info.hall_id WHERE student_info.blood='$blood_group'");
$rows = mysql_num_rows($result);

for ($j = 0 ; $j < $rows ; ++$j)
{
echo "<div class='blood_blood'>";
echo"<fieldset class='fil'>";
echo "<div class='bood'>";
$row = mysql_fetch_row($result);
echo 'Blood Group: ' . mysql_result($result,$j,'blood') . '<br><br>';
echo 'Name:' . mysql_result($result,$j,'student_name') . '<br>';
echo 'Hallname: ' . mysql_result($result,$j,'hall_name') . '<br>';
echo 'Mobile: ' . mysql_result($result,$j,'mobile') . '<br><br>';
echo "</div>";
echo"</fieldset>";
echo "</div>";

}
mysql_close($con);
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}
?>
<?php 
require_once("include/footer.php");
?>