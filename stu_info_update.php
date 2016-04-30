<?php
require_once("include/header.php");
require_once("include/config.php");
?>
<?php 

if($_POST['roll']!=NULL) 

  {
  $roll = $_POST['roll'];
  }
  else
  {
  die("You need to provide a roll");
  }

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
echo "
<tbody>
";
while($row = mysql_fetch_array($result))
{echo "
<tr>
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
echo<<<_END
<div fix class='form_edit'>
<form method='post' action='editting_valid.php'>
<h2 color="#0000ff"> Update Personal Information Where Needs:</h2>
<form class="form2" method="post" action="register_valid.php">
<label>Name :</label>
<input type="text" name="student_name" id="name"size="30" maxlength="80" >
<label>Father Name :</label>
<input type="text" name="father_name" id="name"size="30" maxlength="80" >
<label for="blood_group">Hall Name :</label>
<select name="hall_id" id="" size="1" >
<option value=" ">Select...</option>
<option value="b">Shahid Tareq Huda Hall</option>
<option value="c">Shahid Mohammad Shah Hall</option>
<option value="d">Bangabandhu Hall</option>
<option value="a">Dr.Qudrate-E-Khuda Hall</option>
<option value="e">Sufia Kamal Hall</option>
</select><br>
<label for="blood_group">Blood Group :</label>
<select name="blood" id="blood_gropu" size="1" >
<option value=" ">Select...</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
</select><br>
<label>Sex :</label>
<input type="radio" name="sex"value="Male" >Male</input>
<input type="radio" name="sex"value="Female" >Female</input><br>
<label>Email :</label>
<input type="text" name="email" id="email"size="30" maxlength="80" >
<label>Mobile No :</label>
<input type="text" name="mobile" id="email"size="11" maxlength="11" >

<label>Password :</label>
<input type="password" name="password" id="password"size="30" maxlength="80" >

<input type="submit" name="update" id="register" value="Update">
<input class="btn" type="submit" name="reset" id="reset" value="Delete">
</div>
</form>
</div>

_END;

mysql_close($con);
function get_post($var)
{
return mysql_real_escape_string($_POST[$var]);
}
?>
<?php 
require_once("include/footer.php");
?>