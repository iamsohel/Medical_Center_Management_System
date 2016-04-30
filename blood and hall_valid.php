<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 
if( $_POST['blood']!=NULL &&
(($_POST['hall_id'])!=NULL) )
 {
   $blood_group = $_POST['blood'];
   $hall_id = $_POST['hall_id'];
}
  else
  {
  die("You need to provide a Hall Name and Blood Group.");
  }

$result=mysql_query("SELECT student_name, mobile, email FROM  student_info  WHERE blood='$blood_group' and hall_id='$hall_id'");

$rows = mysql_num_rows($result);

echo "<div class='main'>";
echo "<div class='bood_medi_5'>";
echo"<table id='travel'>
<thead>    
    	<tr>
            <th scope='col' colspan='3'>Specific hall and blood group wise student information</th>
        </tr>
        <tr>
            <th scope='col'>Student Name</th>
            <th scope='col'>Mobile</th>
			<th scope='col'>Email</th>
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
<td>".$row['mobile']."</td>
<td>".$row['email']."</td>
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