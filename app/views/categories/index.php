<h2 align="center">Categorias</h2>


<table class="table">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Action</th>	
		
	</tr>
<?php foreach ($categories as $category ): ?>
    <tr>
		<td><?php echo $category['id']; ?></td>
		<td><?php echo $category['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">Delete</a>
		
<?php endforeach; ?>

</table>


<a class="btn btn-default" href="<?php echo APP_URL; ?>categories/add">Añadir</a>

