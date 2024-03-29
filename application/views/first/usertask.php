<html>
<head>
	<title>User Task Page</title>
	<style type="text/css">
	#usertask
	{
		margin-left: 25%;
		border: 2px solid;
	}
	#pdiscription
	{
		margin-left: 25%;
		border: 2px solid;
		display: none;
	}
.myButton {
	-moz-box-shadow: 3px 4px 0px 0px #1564ad;
	-webkit-box-shadow: 3px 4px 0px 0px #1564ad;
	box-shadow: 3px 4px 0px 0px #1564ad;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}

	</style>
	<script type="text/javascript">
	$(document).ready(function() {
    $('.myButton').click(function() {
            $('#pdiscription').slideToggle("fast");
    });
});
	</script>
</head>
<body>
	<div id="usertask">
		Project Assigned:<input type="text" disabled="disabled">
		Project Assigned Date:<input type="date" disabled="disabled">
		Project Due Date:<input type="date" disabled="disabled">
		<a href="#" class="myButton">Click Here to create task</a>

	</div>
	<div id="pdiscription">
		<form method="post" action="">
			Task Date:<input type="date" name="tdate">
			Task Name:<input type="text" name="tname">
			Task Description:<textarea rows="4" cols="50" name="pdescription"></textarea>
			<input type="submit" name="submit" value="Submit">
		</form>
	</div>
</body>
</html>