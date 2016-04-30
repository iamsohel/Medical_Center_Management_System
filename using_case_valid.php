<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 
   
$result=mysql_query(" select student_name,user_roll,case when user_roll like '%04%' then 'CSE' when user_roll like '%05%' then 'URP' when user_roll like '%01%' then 'CE' when user_roll like '%02%' then 'EEE' when user_roll like '%03%' then 'ME' when user_roll like '%06%' then 'ARCH' when user_roll like '%07%' then 'PME' when user_roll like '%08%' then 'ETE' else null end 'department' from student_info");
$rows = mysql_num_rows($result);

echo "<div class='main'>";
echo "<div class='bood_medi_10'>";

echo"<table id='travel'>
<thead>    
    	<tr>
            
            <th scope='col' colspan='3'> Students Full Informations</th>
        </tr>
        
        <tr>
		    
			<th scope='col'>Student Roll</th>
            <th scope='col'>Student Name</th>
            <th scope='col'>Department</th>
			
        </tr>        
    </thead>
	";
$row = array();
$roll;
echo "
<tbody>
";
while($row = mysql_fetch_array($result))
{

$roll = $row['user_roll'];
echo "
<tr>
<td>".$row['user_roll']."</td>
<td><a href='student_info_update.php?roll=".$roll."'>".$row['student_name']."</a></td>
<td>".$row['department']."</td>
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


mysql_close($con);
?>
<?php 
require_once("include/footer.php");
?>