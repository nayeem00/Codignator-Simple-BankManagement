<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			body{
				font-family: Arial;
			}
		</style>
	</head>
	<body>
		<center>
			<h2>LOGIN</h2>
			<form method="post">
				<table cellpadding="4" cellspacing="4">
					<tr>
						<td>USERNAME</td>
						<td><input name="username" type="text" /></td>
					</tr>
					<tr>
						<td>PASSWORD</td>
						<td><input name="password" type="password" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><?php echo $captcha?></td>
					</tr>
					<?php echo $captchaField ?>
					<tr>
						<td>&nbsp;</td>
						<td><input name="buttonLogin" type="submit" value="Login"  /></td>
					</tr>
				</table>
			</form>
			<br />
			
			<!-- Label to display error message -->
			<label style="color:red"> <?php echo $message ?> </label>
		</center>
		
	</body>
</html>