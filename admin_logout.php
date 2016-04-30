<html> 
<head>
<title>CUET MEDICAL CENTER</title>

<link rel='stylesheet' type='text/css' href='style.css'/>
</head>
<body>
<div id="wrapper">
<div class="main">
<div fix class='header' align='center'>
<img  src='images/medban.png' alt=''/>
</div>
<div fix class='slider' align='center'>
<a  class='customfont' href=''>Insert</a>
<a  class='customfont' href=''>Update</a>
<a  class='customfont' href=''>Delete</a>
<a  class='customfont' href=''>Logout</a>
</div>
<div class="admin_in">
</div>
</div>
<?php
session_unset();
session_destroy();
Header ("Location: index.php");

?>
<?php 
require_once("include/footer.php");
?>