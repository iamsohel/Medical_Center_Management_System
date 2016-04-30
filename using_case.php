<?php
require_once("include/header.php");
?>
<?php
if(isset($_SESSION['valid_user']))
{
echo <<<_END
<div fix class='main'>
<div class ="bt_roll"><a href="http://localhost/cmc.org/using_case_valid.php">Student List</a></div>
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