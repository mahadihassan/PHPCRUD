<?php
	include 'lib/Database.php';
	include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="table-responsive">
			<div class="table-dark table-active">
				<?php
					$query = "SELECT * FROM users ";
					$connct = mysqli_query($connection, $query);

				?>
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Skill</th>
							<th>Skill</th>
						</tr>
						<tbody>
						<?php while ($row = mysqli_fetch_assoc($connct)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['skill']; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
									<a onclick="return confirm('Are You Want to Delete This File')" href="delete.php?del_id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>


<?php
	include 'footer.php';
?>