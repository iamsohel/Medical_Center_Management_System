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
echo"<table id='travel'>
<thead>    
    	<tr>
            
            <th scope='col' colspan='4'>Specific roll wise information</th>
        </tr>
        
        <tr>
            <th scope='col'>Student Name</th>
            <th scope='col'>Father Name</th>
            <th scope='col'>Hall</th>
            <th scope='col'>Mobile</th>
            
        </tr>        
    </thead>
	";

$row = array();
echo "
<tbody>
";
while($row = mysql_fetch_array($result))
{echo "
<tr>
<td>".$row['student_name']."</td>
<td>".$row['father_name']."</td>
<td>".$row['hall_name']."</td>
<td>".$row['mobile']."</td>
</tr>
";
}
echo "";
echo "</div>";
echo "</div>";
echo "</div>";

echo "
</tbody>
</table>";
mysql_close($con);
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}
?>
<?php 
require_once("include/footer.php");
?>