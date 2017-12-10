<!DOCTYPE html>
<html>
<head>
	<title>Audit Barang</title>
</head>
<body>
	<center><h1>List Data Barang</h1></center>
	<center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
	<table style="margin:20px auto;"
	border="1" cellspacing="0">
		<tr>
			<th>NO</th>
			<th>KODE BARANG</th>
			<th>NAMA BARANG</th>
			<th>ASAL BARANG</th>
			<th>MODAL</th>
			<th>HARGA</th>
			<th>STOCK</th>
			<th>ACTION</th>
		</tr>
		<?php 
			$no=1;
			foreach($barang as $u){
		 ?>
		 <tr>
		 	<td><?php echo $no++; ?></td>
		 	<td><?php echo $u->kodebarang; ?></td>
		 	<td><?php echo $u->namabarang; ?></td>
		 	<td><?php echo $u->asal; ?></td>
		 	<td><?php echo $u->modal; ?></td>
		 	<td><?php echo $u->harga; ?></td>
		 	<td><?php echo $u->stock; ?></td>		
		 	<td>
		 		<?php echo anchor('crud/edit/'.$u->id, 'Edit'); ?>
		 		<?php echo anchor('crud/hapus/'.$u->id, 'Hapus'); ?>
		 	</td>
		 </tr>
		 <?php } ?>
	</table>
</body>
</html>