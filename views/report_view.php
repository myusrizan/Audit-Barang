<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css">
</head>
<body>
<div class="container">
	<?php $this->load->view('navbar'); ?>
</div>

<div class="container" style="margin-top:50px">
	<h2>Report Penjualan</h2>
	<?php if (!(empty($report))) {?>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA BARANG</th>
				<th>BARANG TERJUAL</th>
				<th>WAKTU</th>
				<th>PEGAWAI</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($report as $u){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
			 	<td><?php echo $u->barang; ?></td>
			 	<td><?php echo $u->stok_terjual; ?></td>
			 	<td><?php echo $u->waktu; ?></td>
			 	<td><?php echo $u->pegawai; ?></td>
				<td><center><a href="<?php echo base_url().'index.php/Rpl/konfHapusReport/'.$u->id; ?>" class="btn btn-danger btn-sm">
					<span class="glyphicon glyphicon-trash"></span> Hapus</a></center></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php }
	else { echo "DATA KOSONG"; }?>	
</div>
    <?php $this->load->view("footer.php") ?>
</body>
</html>