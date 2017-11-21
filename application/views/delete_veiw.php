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
			<h2>DELETE CONFIRMATION</h2>
				
				<table cellpadding="4" cellspacing="4">
					<tr>
						<td><b>ACCOUNT NO.:</b></td>
						<td><?php echo $user['account_no'] ?></td>
					</tr>
					<tr>
						<td><b>ACCOUNT NAME:</b></td>
						<td><?php echo $user['accounrt_name'] ?></td>
					</tr>
				</table>
				<br />
				<br/>
				<h4>Are you sure you want to delete?</h4>
				<form method="post">
					<input type="hidden" />
					 <input name="dltbtn" type="Submit" value="Confirm"> 
				</form>
				<br />
				<br/>
				<a href="http://localhost/Bank/home/">Back to Home</a>
		</center>
	</body>
</html>