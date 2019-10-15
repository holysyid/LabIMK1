<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>

<body>
	<center><h1>LIST DATA USERS</h1></center>
	<br>
	<center><button type="button" class="btn btn-info"><a href="<?php echo base_url('index.php/crud/input'); ?>">Input Data</a></button></center>
	<br><br>

	<table id="customers">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Lakukan</th>
		</tr>
		<?php
		$no = 1;
		foreach($pegawai as $u) {
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->jenis_kelamin ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><button type="button" class="btn btn-info"><?php echo anchor('crud/edit/'.$u->nim,'Edit');?></button>
				<button type="button" class="btn btn-info"><?php echo anchor('crud/delete/'.$u->nim,'Delete');?></button></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>