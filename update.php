<?php
require 'lib/Database.php';
?>
<?php
	$message = '';
	if (isset($_POST['update'])) {
		$id = $_GET['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$skill = $_POST['skill'];
		$query = "UPDATE users set name = '".$name."', email = '".$email."', skill= '".$skill."' where id= '".$id."' ";
		$result = mysqli_query($connection, $query);
		if ($result) {
			header("location:index.php");
		}
		else
		{
			echo "Please Check query";
		}
		$message = 'Data inserted Successfullt';
	}
	else
	{
		header("location:index.php");
	}
?>