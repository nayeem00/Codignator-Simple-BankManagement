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
			<h2>HOME</h2>
			<table cellpadding="4" cellspacing="12">
				<tr>
					<td><a href="http://localhost/Bank/home/addnewclick">Add New</a></td>
					<td><a href="http://localhost/Bank/home/depositclick">Deposit</a></td>
					<td><a href="http://localhost/Bank/home/withdrawclick">Withdraw</a></td>
					<td><a href="http://localhost/Bank/home/transferclick">Transfer</a></td>
					<td><a href="http://localhost/Bank/home/logout">Logout</a><span style="color: red">({username})</td></span>
				</tr>
			</table>
			
			<br />
			<br />

			<table border="1" cellpadding="4" cellspacing="4">
				<thead>
					<tr>
						<th>ACCOUNT NO.</th>
						<th>ACCOUNT NAME</th>
						<th>Balance</th>
						<th>OPTION</th>
					</tr>
				</thead>

				<tbody>
				{userlist}
					<tr>
						<td><a href="http://localhost/Bank/home/userdetails/{account_no}"> {account_no} </a></td>
						<td> {accounrt_name} </td>
						<td> {balance}  </td>
						<td><a href="http://localhost/Bank/home/delete/{account_no}">Delete </a></td>
					</tr>
					{/userlist}
				</tbody>
			</table>


		</center>
	</body>
</html>