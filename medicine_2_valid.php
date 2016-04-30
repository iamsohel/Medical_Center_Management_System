<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php
if( $_POST['generic_id']!=NULL ) 
    {
   $medicine = $_POST['generic_id'];
	}
  else
  {
  die("You need to provide a Generic Name.");
  }
   
$result=mysql_query("SELECT generic_name, appliance, count( DISTINCT company_id )
FROM medicine_info
JOIN generic_info ON generic_info.generic_id = medicine_info.generic_id
WHERE medicine_info.generic_id = '$medicine';");
$rows = mysql_num_rows($result);

echo "<div class='main'>";
echo "<div class='bood_medi_5'>";

echo '<table><tr> <th>Generic_Name</th>   <th>Use</th>  <th>No. of Company</th></tr>';
echo "<div class='bood_medi_2'>";
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysql_fetch_row($result);
echo "<tr>";
for ($k = 0 ; $k < 3 ; ++$k)
echo "<td>$row[$k]</td>";
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