<?php
session_start();
require_once("include/config.php");
?>
<html> 
<head>
<title>CUET MEDICAL CENTER</title>
<link rel='stylesheet' type='text/css' href='css/bar/bar.css'/>
<link rel='stylesheet' type='text/css' href='css/dark/dark.css'/>
<link rel='stylesheet' type='text/css' href='css/light/light.css'/>
<link rel='stylesheet' type='text/css' href='css/default/default.css'/>
<link rel='stylesheet' type='text/css' href='css/nivo-slider.css'/>
<link rel='stylesheet' type='text/css' href='css/style.css'/>
</head>
<body>
<div id="wrapper">
<div fix class='header' align='center'>
<img  src='images/medban.png' alt=''width='100%' height='25%'/>
</div>
<div fix class='slider' align='center'>
<a  class='customfont' href='index.php'>Home</a>
<a  class='customfont' href='medicine.php'>Medicine</a>
<a  class='customfont' href='doctor.php'>Doctors</a>
<a  class='customfont' href='ambulance.php'>Ambulance</a>
<a  class='customfont' href='blood.php'>Blood</a>
<a  class='customfont' href='register.php'>Sign Up</a>
<?php
if(isset($_SESSION['valid_user'] ))
echo"<a  class='customfont' href='logout.php'>Logout</a>";
else
echo"<a  class='customfont' href='login.php'>Sign In</a>";

?>

</div>