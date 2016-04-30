<?php
require_once("include/header.php");
?>
<style>
.main{width:960px;margin:0 auto;display:block;background-color:#fff}
.side3{ height: 300px;
    margin-left: 13px;
    margin-top: 75px;
    width: 960px}
.fix{overflow:hidden}
    p{    color: #2b5464;
    margin-left: 250px;
	}
.form3{ 
    margin-left: 205px;
    margin-right: 86px;
    margin-top: 1px;
    width: 506px;}
input[type=text],[type=password] {
width: 97.7%;
height: 34px;
padding-left: 5px;
margin-bottom: 20px;
margin-top: 8px;
box-shadow: 0 0 5px #00F5FF;
border: 2px solid #FF0000;
color: #8B0000;
font-size: 16px;
}
label {
    color: #000000;
    font-size: 25px;
    font-weight: bold;
    text-shadow: 0 1px 0 #ffffff;
}
.btn{
font-size: 30px;
margin-top: 15px;
margin-left: 141px;
background: linear-gradient(#22abe9 5%, #36caf0 100%);
border: 1px solid #0F799E;
padding: 7px 35px;
color: white;
text-shadow: 0px 1px 0px #13506D;
font-weight: bold;
border-radius: 2px;
cursor: pointer;
width: 40%;
}
.log{padding-top:55px;height:480px}
</style>

<div fix class="main">
<div class="log">
<p>Please Enter Your Roll & Password</p>
<div  fix class="side3">
<form fix class="form3" method="post" action="login_valid.php">
<input type="hidden" name="login_form" value="true">
<label>User_Roll</label>
<input type="text" name="user_roll" id="name" size="30" maxlength="80" >
<label>  Password</label>
<input type="password" name="password" id="name"size="30" maxlength="80" >
<input class="btn" type="submit" name="Login"  value="Login">
</form>
</div>
</div>
</div>

<?php 
require_once("include/footer.php");
?>