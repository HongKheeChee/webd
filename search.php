<!DOCTYPE html>
<?php
	
	$title = "List book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
<html>
<head>
	<title>Search Bar using PHP</title>
</head>
<body>
<br><br><br>
<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=www_project",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `books` WHERE book_title = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table class="table" style="margin-top: 20px">
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th></th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		
		<tr>
			<td><?php echo $row->book_isbn; ?></td>
			<td><?php echo $row->book_title; ?></td>
			<td><?php echo $row->book_author; ?></td>
			<td><?php echo $row->book_image; ?></td>
			<td><?php echo $row->book_descr; ?></td>
			<td><?php echo $row->book_price; ?></td>
                        <td><a href="onlineread.php"; ?>Read online trial</a></td>
			
		</tr>
		<?php } ?>
	</table>
<?php 
	}
		
		
		else{
			echo "Book Does not exist";
		}




?>
<?php
      
  require_once "./template/footer.php";
?>
