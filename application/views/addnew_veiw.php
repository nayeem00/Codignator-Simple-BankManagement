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
			<h2>ADD ACCOUNT</h2>
			<form method="post">
				<table cellpadding="4" cellspacing="4">
					<tr>
						<td>ACCOUNT NO.</td>
						<td><input name="accNo" type="text" /></td>
					</tr>
					<tr>
						<td>ACCOUNT NAME</td>
						<td><input name="accName" type="text" /></td>
					</tr>
					<tr>
						<td>ACCOUNT TYPE</td>
						<td>
							<select name="accType" >
								<option>Savings</option>
								<option>Credit</option>
								<option>Current</option>
								<option>Fixed</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input name="CreatNBtn" type="submit" value="Create Account" /></td>
					</tr>
				</table>
			</form>
			<br />
			
			<!-- Label to display error message -->
			<label style="color: red"><?php echo $message ?> </label>
			<br/>
			<br/>
			<a href="http://localhost/Bank/home/">Back to Home</a>
		</center>
	</body>
</html>