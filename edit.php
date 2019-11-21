<?php
require 'header.php';
require 'lib/Database.php';
?>
<?php
$id = $_GET['id'];
$data ="SELECT * FROM users where id ='".$id."'";
$result = mysqli_query($connection, $data);

while ($row =mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$name = $row['name'];
	$email = $row['email'];
	$skill = $row['skill'];
}

?>
<div class="card-header">
	<h4>Edit Profile <span><a href="index.php" class="btn btn-primary text-center">Back</a></span></h4>
	<div class="card-body">
		<div style="max-width: 600px; margin: 0 auto">
			<?php if(!empty($message)): ?>
				<div class="alert alert-success">
					<?= $message; ?>
				</div>
			<?php endif; ?>
			<form action="update.php?id=<?php echo $id ?>" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" value="<?php echo $name  ?>" required/>
				</div>
				<div class="form-group">
					<label for="username">email</label>
					<input type="text" name="email" class="form-control" value="<?php echo $email ?>" required/>
				</div>
				<div class="form-group">
					<label for="email">Skill</label>
					<input type="text" name="skill" class="form-control" value="<?php echo $skill ?>" required/>
				</div>
				<button type="submit" name="update" class="btn btn-success">Update</button>
			</form>
		</div>
	</div>
</div>