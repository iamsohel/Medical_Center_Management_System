<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 
if(($_POST['roll_1']!=NULL) &&
($_POST['roll_2']!=NULL) && 
  (($_POST['roll_3'])!=NULL))
    {
  $roll_1 = $_POST['roll_1'];
   $roll_2 = $_POST['roll_2'];
    $roll_3 = $_POST['roll_3'];
	}
  else
  {
  die("You need to provide at least 3 roll.");
  }

 
$result=mysql_query("SELECT student_name,father_name,hall_name,mobile FROM student_info join hall_info on student_info.hall_id=hall_info.hall_id  WHERE student_info.user_roll in(' $roll_1',' $roll_2',' $roll_3');");
$rows = mysql_num_rows($result);
echo "<div class='main'>";
echo "<div class='bood_medi_7'>";
echo '<table><tr> <th>Student name</th>   <th>Father name</th>  <th>Hall</th> <th>Mobile</th></tr>';
echo "<div class='bood_medi_2'>";
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysql_fetch_row($result);
echo "<tr>";
for ($k = 0 ; $k < 4 ; ++$k)
echo "<td>--$row[$k]</td>";
echo "</tr>";
echo "</div>";
echo "</div>";
echo "</div>";
}
echo "</table>";
mysql_close($con);
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}
?>
<?php 
require_once("include/footer.php");
?>