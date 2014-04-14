<html>
<head>
<title>
User Home Page		
</title>
<style type="text/css">
#user
{
margin-left:25%;
}
</style>
<script type="text/javascript">

function validate(){
	if(document.getElementById('password')!=document.getElementById('password1'))
	{
		return false;
		alert("Enter matching password");
	}
}
</script>
</head>
<body>
	<div id="user">
	<h2> User Registration Form</h2>
	<form action="<?php echo base_url();?>index.php/first/submit_data" method="post">
	<table>
		<tr><td>Username:</td><td><input type="text" name="username" required></td></tr>
		<tr><td>Password:</td><td><input type="password" name="password" id="password" required></td></tr>
		<tr><td>Confirm Password:</td><td><input type="password" id="password1" name="password1" required></td></tr>
		<tr><td>Name:</td><td><input type="text" name="uname" required></td></tr>
		<tr><td>Email:</td><td><input type="text" name="email" required></td></tr>
		<tr><td></td><td><input type="submit" name="submit" value="Submit" onclick="validate()"></td></tr></table>
	</form>
	<div>   
	<?php if (isset($message)){ ?><p align="left" style="color:red; margin-left:15%;"><?php print_r($message); unset($message); }  ?></p></div>
	</div>
</body>
</html>