<h1>Welcome to Project One!</h1>
		<table>
			<thead>
				<th>Fullname</th>
				<th>Username</th>
				<th>Email</th>
				<th>Date Joined</th>
			</thead>
			<tbody>
				<h3>List of users</h3>
				<?php	
					$query = "SELECT * FROM users";
					$run_query = $db->query($query);
				?>
				<?php while($data = mysqli_fetch_assoc($run_query)): ?>
					<tr>
						<td><?php echo $data['fullname']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['datejoined']; ?></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>