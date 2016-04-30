<?php

require_once("include/header.php");
?>
<style>
p{  color: #ff0000;
    margin-left: 0}
.main{width:960px;margin:0 auto;display:block;background-color:#fff}
.form_am{  color: #0000ff;
    font-size: 30px;
    height: 129px;
    line-height: 1.5;
    margin-left: 10px;
    padding-top: 40px;}
	.pic{height: 515px;
    margin-left: 142px;}</style>
	<?php
if(isset($_SESSION['valid_user']))
{
echo<<<_END
	<div class="main">
<div class="form_am">
<p align="center"> For Ambulance at any emergency please contact:<br>
Mobile:01777-281691</p>
</div>
<div class="pic">
<img src="images/medambu1.png" border="7" color="#3399ff" alt="" />
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