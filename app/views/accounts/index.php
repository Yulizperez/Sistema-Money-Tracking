<div class="row" align="center">
	<h3 align="center">Listado de cuentas</h3>
<h2 align="center"></h2>
<div class="col-sm-1" >
		<a href="<?php echo APP_URL; ?>accounts/add">
			<span class="glyphicon glyphicon-plus"></span>
<br>
</div>
</div>

<table align="center" class="table"  border="2">
<thead align="center">

	<tr>
		<th>Id</th>
		<th>User_id</th>	
		<th>Name</th>
		<th>Action</th>
	</tr>
	</thead>
<?php foreach ($accounts as $account ): ?>
    <tr>
		<td><?php echo $account['id']; ?></td>
		<td><?php echo $account['user_id']; ?></td>	
		<td><?php echo $account['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Delete</a>
			
		
<?php endforeach; ?>

</table>
</div>
</div>
