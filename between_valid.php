<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 
if(($_POST['roll_1']!=NULL) &&
($_POST['roll_2']!=NULL)) 
  {
  $roll_1 = $_POST['roll_1'];
  $roll_2 = $_POST['roll_2'];
  }
  else
  {
  die("You need to provide two roll");
  }

$result=mysql_query(" SELECT student_name,user_roll FROM student_info WHERE  user_roll between $roll_1 and $roll_2");
$rows = mysql_num_rows($result);
echo "<div class='main'>";
echo "<div class='bood_medi_8'>";
echo"<table id='travel'>
<thead>    
    	<tr>
            <th scope='col' colspan='2'> Students list  in a certain roll no. range</th>
        </tr>
        
        <tr>
            <th scope='col'>Student Name</th>
            <th scope='col'>Roll No</th>
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
<td>".$row['user_roll']."</td>
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