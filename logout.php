<?php
require_once("include/header.php");
?>
<?php
session_unset();
session_destroy();
Header ("Location: login.php");

?>
<?php 
require_once("include/footer.php");
?>