<html>
<head>
	<title>Admin Page</title>
<style type="text/css">
#project
{
	margin-left: 25%;
	border: 2px solid;
}
</style>
</head>
<body>
<div id="project">
<form method="post" action="<?php echo base_url();?>index.php/first/assignwork">
	project Name:<input type="text" name="pname"><br>
	Start Date:<input type="date" name="sdate"><br>
	End Date:<input type="date" name="edate"><br>
	Select The Candidte:<input type="select" name="candidate">
				<option value=''><--Select--></option>
	
	</select>
	<input type="submit" name="submit" value="Submit">
</form>
</div>
</body>
</html>