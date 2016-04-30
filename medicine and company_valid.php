<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 
if( $_POST['medicine']!=NULL ) 
    {
   $medicine = $_POST['medicine'];
	}
  else
  {
  die("You need to provide a medicine name.");
  }
   
$result=mysql_query("SELECT*FROM  medicine_info join company_info on medicine_info.company_id=company_info.company_id  WHERE medicine_info.company_id='$medicine'");
$rows = mysql_num_rows($result);
echo "<div class='main'>";
echo "<div class='bood_medi'>";
echo '<table><tr> <th>Medicine</th> <th>Use</th></tr>';
echo "<div class='bood_medi_2'>";
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = mysql_fetch_row($result);
echo "<tr>";
for ($k = 0 ; $k < 2 ; ++$k)
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