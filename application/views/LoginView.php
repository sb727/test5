<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<style type="text/css">
		#login {
			margin: auto;
			margin-top: 100px;
			width: 200px;
			height: 150px;
			border: solid 4px #01b7f2;
			border-radius: 20px;
			padding: 50px;
		}
		#login input {
			clear: both;
			border: none;
			height: 30px;
			width: 200px;
			font-size: 15px;
			margin-bottom: 10px;
			border: solid 2px #DDDDDD;
			border-radius: 5px;
		}
		#login #login-btn{
			margin-top: 20px;
			margin-bottom: 0px;
			color: #fff;
			font-weight: bold;
			text-align: center;
			text-transform: uppercase;
		}
		#login #login-btn:hover{
			background-color: #01b7f2;
			border-color: #01b7f2
		}
	</style>
</head>
<body>
<h1>Hello World!</h1>

<div id="login">
	<?php 
			echo form_open('loginCtrl/isUser',"id='login-form'");
			echo form_input('userid', '', "id='login-id', placeholder='type your USERID'");
			echo '<br>';
			echo form_password('password', '', "id='login-pw', placeholder='type your PASSWORD'");
			echo form_submit('mysubmit','Log in', "id='login-btn'");
			echo form_close();
	?>
</div>

</body>
</html>