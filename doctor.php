<?php

require_once("include/header.php");
?>
<style>

.form_doc {
    color: #3399ff;
    font-size: 20px;
    height: 618px;
    margin-left: 89px;
    padding-top: 30px;
}
.main_doc{width:960px;margin:0 auto;display:block;background-color:#fff}
 p{padding-top:30px;padding-left:306px;font-size:30px;color:#ff0000}
 main_b{height:500px}
</style>
	<?php
if(isset($_SESSION['valid_user']))
{
echo<<<_END
<div class="main_doc">
<p>List of Doctors(on duty)</p>
<div class="form_doc">
<table width="930" border="1">
<tr>
<td align="center">Day</td>
<td align="center">9.00am to 4.00pm</td>
<td align="center">4.00pm to 9.00am</td>
<td align="center">9.00pm to 9.00am</td>
</tr>
<tr>
<td align="center" color="#3399ff">Sun</td>
<td align="center">Dr.Mir Murtoza Reza khan<br>Chief Medical Officer<br>Mob:01713-109939</td>
<td align="center">Dr.Sahab Uddin<br>Medical Officer<br>Mob:01819-646796</td>
<td align="center">Dr.Sahab Uddin<br>Medical Officer<br>Mob:01819-646796</td>
</tr>
<tr>
<td align="center">Mon</td>
<td align="center">Dr.Mir Murtoza Reza khan<br>Chief Medical Officer<br>Mob:01713-109939</td>
<td align="center">Dr.Rani Akter<br> Medical Officer<br>Mob:01812-895683</td>
<td align="center">Dr.Md.Khorshedul Alam<br> Medical Officer<br>Mob:01819-319697</td>
</tr>
<tr>
<td align="center">Tue</td>
<td align="center">Dr.Mir Murtoza Reza khan<br>Chief Medical Officer<br>Mob:01713-109939</td>
<td align="center">Dr.Rani Akter<br> Medical Officer<br>Mob:01812-895683</td>
<td align="center">Dr.Md.Khorshedul Alam<br> Medical Officer<br>Mob:01819-319697</td>
</tr>
<tr>
<td align="center">Wen</td>
<td align="center">Dr.Mir Murtoza Reza khan<br>Chief Medical Officer<br>Mob:01713-109939</td>
<td align="center">Dr.Rani Akter<br> Medical Officer<br>Mob:01812-895683</td>
<td align="center">Dr.Md.Khorshedul Alam<br> Medical Officer<br>Mob:01819-319697</td>
</tr>
<tr>
<td align="center">Thu</td>
<td align="center">Dr.Mir Murtoza Reza khan<br>Chief Medical Officer<br>Mob:01713-109939</td>
<td align="center">Dr.Sahab Uddin<br>Medical Officer<br>Mob:01819-646796</td>
<td align="center">Dr.Sahab Uddin<br>Medical Officer<br>Mob:01819-646796</td>
</tr>
<tr>
<td align="center">Fri</td>
<td align="center">&nbsp</td>
<td align="center">Dr.Rani Akter<br> Medical Officer<br>Mob:01812-895683</td>
<td align="center">Dr.Rani Akter<br> Medical Officer<br>Mob:01812-895683</td>
</tr>
<tr>
<td align="center">Sat</td>
<td align="center">Dr.Sahab Uddin<br>Medical Officer<br>Mob:01819-646796</td>
<td align="center">Dr.Md.Khorshedul Alam<br> Medical Officer<br>Mob:01819-319697</td>
<td align="center">Dr.Md.Khorshedul Alam<br> Medical Officer<br>Mob:01819-319697</td>
</tr>
</table>
</div>
</div>
_END;
}
else
{
echo<<<_END
<div fix class='main'>
<div fix class='main_b'>
_END;
echo"Whoops! No. You have to login first";
echo<<<_END
</div>
</div>
_END;
}
?>
<?php 
require_once("include/footer.php");
?>