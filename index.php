<?php
require_once("include/header.php");
?>
<div fix class='main'>

<div fix class='maincontent'>
 <div class='slider-wrapper theme-light'>
<div class='nivoSlider' id='slider2'>
<img src='images/med1.png' alt=''/>
<img src='images/med3.png' alt=''/>
<img src='images/med2.png' alt=''/>
<img src='images/med4.png' alt='' />
</div>
</div>
</div>
<div fix class='content'>
<div fix class='sidebar'>

<form method='post' action='admin_login_valid.php'>
  <fieldset class='account-info'>
 <label>Admin Id :</label>
<input type="text" name="user_id" id="name"size="30" maxlength="80" >

<label>Password :</label>
<input type="password" name="password" id="email"size="30" maxlength="80" >

  </fieldset>
  <fieldset class='account-action'>
    <input class='btn' type='submit' name='submit' value='Login'>
    <label>
     </label>
  </fieldset>
</form>

</div>
<div fix class='text'>
<p><h4>Welcome to 'CUET MEDICAL CENTER'</h4></p></div><div class='text2'>
<P> CUET MEDICAL CENTER is only the first medical service center in Chittagong University of Engineering & Technology (CUET). It was established in 1986 by a group of dedicated people called the founder members who were imbued with the ideals of providing quality medical services, examinee and services to students of this university. The medical center is run by Bangladesh Medical Studies and Research Institute (BMSRI) which is a non political and non profitable organization. The members of the Institute are not entitled to any remuneration or dividends. </P>
 
</div>
</div>

</div> 
<div fix class='footer'align='bottom'>
<h5 align='center'>copyright &copy;   Sohel Rana </h5>
</div>
<script type='text/javascript' src='js/jquery-1.9.0.min.js'></script>
<script type='text/javascript' src='js/jquery.nivo.slider.pack.js'>
</script>
<script type='text/javascript'>
    $(window).load(function() {
        $('#slider2').nivoSlider();
    });
    </script>
</body>
</html>


