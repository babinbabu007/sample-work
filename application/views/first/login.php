<!DOCTYPE HTML>
<html>
<head>
<title>Simple Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css//structure.css">
</head>

<body>
<?php if (isset($message)){ ?><p align="left" style="color:red; margin-left:15%;">	
	   <?php echo "<fontcolor='red'>Invalid Username/Password</font>"; }  ?></p></div>
<form class="box login" action="<?php echo base_url();?>index.php/first/logincheck" method="post">
	<fieldset class="boxBody">
	
	  <label>Username</label>
	  <input type="text" tabindex="1" name="user" placeholder="Username" required>
	  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  <input type="password" tabindex="2" placeholder="Password" name="password" required>
	</fieldset>
	<footer>
	  <label><a href="<?php echo base_url();?>index.php/first/signUp">Sign Up</a></label>
	  <input type="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>

</form>
<footer id="main">
  Nuevalgo Solutions Pvt Ltd.
</footer>
</body>
</html>
