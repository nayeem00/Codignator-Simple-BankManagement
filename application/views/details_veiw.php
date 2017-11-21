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
			<h2>DETAILS</h2>
				<table cellpadding="4" cellspacing="4">
					<tr>
						<td><b>ACCOUNT NO.:</b></td>
						<td><?php echo $user['account_no'] ?></td>
					</tr>
					<tr>
						<td><b>ACCOUNT NAME:</b></td>
						<td><?php echo $user['accounrt_name'] ?></td>
					</tr>
					<tr>
						<td><b>ACCOUNT TYPE:</b></td>
						<td><?php echo $user['account_type'] ?></td>
					</tr>
					<tr>
						<td><b>BALANCE:</b></td>
						<td><?php echo $user['balance'] ?></td>
					</tr>
					<tr>
						<td><b>LAST TRANSACTION:</b></td>
						<td><?php echo $user['last_tran'] ?></td>
					</tr>
				</table>
				<br />
				<br/>
				<a href="http://localhost/Bank/home/delete/<?php echo $user['account_no'] ?>">Delete Account</a>
				<br />
				<br/>
				<a href="http://localhost/Bank/home/">Back to Home</a>
		</center>
	</body>
</html>