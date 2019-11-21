<?php
	require 'lib/Database.php';
?>

<?php
	if (isset($_GET['del_id']))
	{
		$id = $_GET['del_id'];
		$del = "DELETE  FROM users WHERE id ='".$id."' ";
		$result = mysqli_query($connection, $del);

		if($result)
		{
			header("location:index.php");
		}
		else
		{
			echo "Please Check query";
		}
		
	}
	else
	{
		header("location:index.php");
	}
	

?>