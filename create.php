<?php
require 'header.php';
require 'lib/Database.php';
?>
<?php
$message= '';
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['skill'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$skill = $_POST['skill'];
	$query = ("INSERT INTO users (name, email, skill) VALUES('$name', '$email', '$skill')");
	$result = mysqli_query($connection, $query);
	$message = 'Data Add Successfully';
}
?>

<div class="card-header">
	<h4>User Profile <span><a href="index.php" class="btn btn-primary text-center">Back</a></span></h4>
	<div class="card-body">
		<div style="max-width: 600px; margin: 0 auto">
			<?php if(!empty($message)): ?>
				<div class="alert alert-success">
					<?= $message ?>
				</div>
			<?php endif; ?>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="username">email</label>
					<input type="text" name="email" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="username">Skill</label>
					<input type="text" name="skill" class="form-control" required/>
				</div>
				<button type="submit" class="btn btn-success">Crate a Person</button>
			</form>
		</div>
	</div>
</div>