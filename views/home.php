<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css">
    <link rel="icon" href="<?php echo base_url('assets/icon.ico');?>" type="image/x-icon">
</head>
<body>
<div class="container">
	<?php $this->load->view('navbar'); ?>
</div>

<div class="container" style="margin-top:50px">
	<h2>Data Barang</h2>
 <?php if ($this->session->userdata('kasta') == 1){ ?>
 	<center><a href="<?php echo base_url().'index.php/Rpl/tambah' ?>" class="btn btn-default">
 		<span class="glyphicon glyphicon-plus-sign"></span> Tambah Data</a></center><br>
<?php }?>
	<?php if (!(empty($barang))) {?>
	<table class="table table-bordered table-hover table-striped">
		<thead>
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
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($barang as $u){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
			 	<td><?php echo $u->kodeBarang; ?></td>
			 	<td><?php echo $u->namaBarang; ?></td>
			 	<td><?php echo $u->asal; ?></td>
			 	<td><?php echo $u->modal; ?></td>
			 	<td><?php echo $u->harga; ?></td>
			 	<td><?php echo $u->stok; ?></td>		
			 	<td>
					<?php if (($this->session->userdata('kasta') == 2)||($this->session->userdata('kasta') == 3)){ ?>	
						<a href="<?php echo base_url().'index.php/Rpl/editView/'.$u->id; ?>" class="btn btn-info">Jual</a>
						<?php if ($this->session->userdata('kasta') == 2){ ?>	
							<a href="<?php echo base_url().'index.php/Rpl/editView2/'.$u->id; ?>" class="btn btn-info">Beli</a>
						<?php }?>
						<?php }?>
						<?php if ($this->session->userdata('kasta') == 1){ ?>
						<a href="<?php echo base_url().'index.php/Rpl/edit/'.$u->id; ?>" class="btn btn-info btn-sm">
							<span class="glyphicon glyphicon-edit"></span> Edit</a>
						<a href="<?php echo base_url().'index.php/Rpl/hapus/'.$u->id; ?>" class="btn btn-danger btn-sm">
							<span class="glyphicon glyphicon-trash"></span> Hapus</a>
					<?php }?>	
		 		</td>
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