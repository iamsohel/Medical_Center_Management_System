<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}

if (isset($_POST['delete']) && isset($_POST['sroll']))
{

$roll = get_post('sroll');
$query = "DELETE FROM student_info WHERE user_roll=".$roll;
if (!mysql_query($query))
echo "DELETE failed: $query<br>" .
mysql_error() . "<br><br>";
}
if(!empty($_POST['roll'])) 
{

$roll = $_POST['roll'];
$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect: ' .mysql_error());
}
   mysql_select_db("medical_project_2",$con);
   
$result=mysql_query(" SELECT *FROM student_info a join hall_info b on a.hall_id=b.hall_id WHERE  a.user_roll =$roll");
$rows = mysql_num_rows($result);

echo "<div class='main'>";
echo "<div class='bood_medi_10'>";

echo"<table id='travel'>
<thead>    
    	<tr>
            
            <th scope='col' colspan='9'> Students Full Informations</th>
        </tr>
        
        <tr>
			<th scope='col'>Student Roll</th>
            <th scope='col'>Student Name</th>
            <th scope='col'>Father Name</th>
			<th scope='col'>Hall Name</th>
            <th scope='col'>Blood Group</th>
			<th scope='col'>Sex</th>
            <th scope='col'>Email</th>
			<th scope='col'>Mobile</th>
            <th scope='col'>Password</th>
	
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
<td>".$row['student_name']."</td>
<td>".$row['father_name']."</td>
<td>".$row['hall_name']."</td>
<td>".$row['blood']."</td>
<td>".$row['sex']."</td>
<td>".$row['email']."</td>
<td>".$row['mobile']."</td>
<td>".$row['password']."</td>
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

}
else
{
$roll = get_post('sroll');
 die("$roll has been deleted successfully");
}
echo "
<form action='editting_valid.php' method='post'>
<input type='hidden' name='delete' value='yes'>
<input type='hidden' name='sroll' value='".$roll."' >
<div class='up_button'>
<input type='submit' id='register' value='DELETE'>
<input  type='submit' name='update' id='register' value='UPDATE'>
</div>
</form>
";
mysql_close($con);
?>
<?php 
require_once("include/footer.php");
?>