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

$result=mysql_query("SELECT medicine_name ,company_name FROM  medicine_info join company_info on medicine_info.company_id=company_info.company_id  WHERE medicine_info.generic_id='$medicine'");

$rows = mysql_num_rows($result);

echo "<div class='main'>";
echo "<div class='bood_medi_6'>";
echo"<table id='travel'>
<thead>    
    	<tr>
            
            <th scope='col' colspan='2'> Generic name wise Medicine name and Company name</th>
        </tr>
        
        <tr>
            <th scope='col'>Company Name</th>
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
<td>".$row['company_name']."</td>
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

mysql_close($con);
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}
?>
<?php 
require_once("include/footer.php");
?>