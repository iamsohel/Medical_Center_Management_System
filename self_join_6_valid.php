<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 
if( $_POST['medicine_name']!=NULL ) 
    {
   $medicine = $_POST['medicine_name'];
	}
  else
  {
  die("You need to provide a Medicine Name.");
  }
   
$result=mysql_query("select b.medicine_name FROM medicine_info a JOIN medicine_info b ON 
 a.company_id = b.company_id WHERE a.medicine_name = '$medicine';");
$rows = mysql_num_rows($result);

echo "<div class='main'>";
echo "<div class='bood_medi_4'>";

echo"<table id='travel'>
<thead>    
    	<tr>
            
            <th scope='col' colspan='1'>Other medicines of the company which has medicine...</th>
        </tr>
        
        <tr>
            <th scope='col'>Medicine Name</th>
    
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
<td>".$row['medicine_name']."</td>

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
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}
?>
<?php 
require_once("include/footer.php");
?>