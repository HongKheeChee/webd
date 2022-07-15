<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll2($conn);
?>
	<p class="lead"><a href="admin_add.php">Add new book</a></p>
        <p class="lead"><a href="admin_book.php">Back</a></p>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
        <br>
        <p>Order</p>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Orderid</th>
			<th>Amount</th>
			<th>date</th>
			<th>name</th>
			<th>address</th>
			<th>city</th>
			<th>zipcode</th>
                        <th>country</th>
			
			
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['orderid']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['ship_name']; ?></td>
			<td><?php echo $row['ship_address']; ?></td>
			<td><?php echo $row['ship_city']; ?></td>
			<td><?php echo $row['ship_zip_code']; ?></td>
                        <td><?php echo $row['ship_country']; ?></td>
			
			
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>