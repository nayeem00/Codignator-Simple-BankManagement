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
			<h2>TRANSFER</h2>
			<form method="post">
				<table cellpadding="4" cellspacing="4">
					<tr>
						<td>FROM ACCOUNT</td>
						<td><input name="accountNoFrom" type="text" /></td>
					</tr>
					<tr>
						<td>TO ACCOUNT</td>
						<td><input name="accountNoto" type="text" /></td>
					</tr>
					<tr>
						<td>AMOUNT</td>
						<td><input name="amount" type="text" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input name="trans" type="submit" value="Save" /></td>
					</tr>
				</table>
			</form>
			<br />
			
			<!-- Label to display error message -->
			<label style="color: red"><?php echo $message ?></label>
			<br/>
			<br/>
			<a href="http://localhost/Bank/home/">Back to Home</a>
		</center>
	</body>
</html>