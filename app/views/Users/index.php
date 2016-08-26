<h2 align="center">Listado de usuarios</h2>

<table class="table">
	<tr>
		<th>ID</th>
		<th>Username</th>	
		<th>Rol</th>
		<th>Action</th>
	</tr>
<?php foreach ($users as $user ): ?>
    <tr>
		<td><?php echo $user['id']; ?></td>
		<td><?php echo $user['username']; ?></td>	
		<td><?php echo $user['rol']; ?></td>
		<td>
		    <a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>users/delete/?id=<?php echo $user['id']; ?>">Delete</a>
			
		</td>
	</tr>
<?php endforeach; ?>

</table>
<a class="btn btn-default" href="<?php echo APP_URL; ?>users/add">Añadir</a>

