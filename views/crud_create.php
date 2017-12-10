<!DOCTYPE html>
<html>
<head>
	<title>Menginput Data Barang</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style1.css'); ?>" type="text/css">
</head>
<body>
	<div class="container">
		<?php $this->load->view('navbar'); ?>
	</div>
	<form action="<?php echo base_url().'index.php/rpl/tambah_brg'; ?>" method="post">
		<div class="container" align="center" style="margin-top:5%">
		    <div class="form">
		        <div class="col-md-3"></div>
		        <div class="col-md-6">
		            <div class="panel panel-default">
		                <div class="panel-body">
		                    <div class="text-center"><h1>Input Data</h1></div>
		                    <h3>Tambah data baru</h3>
		                    <form action="<?php echo base_url().'index.php/rpl/tambah_brg'; ?>" method="post">
								<div class="form-group">
									<label class="control-label col-sm-3" align="right">Kode Barang:</label>
									<div class="input-group col-xs-8">
			      						<input class="form-control" type="text" name="kodebarang" required>
			   						</div>
			   			 			<br>
			   			 			<label class="control-label col-sm-3" align="right">Nama Barang:</label>
									<div class="input-group col-xs-8">
			      						<input class="form-control" type="text" name="namabarang" required>
			   						</div>
			   			 			<br>
			   			 			<label class="control-label col-sm-3" align="right">Asal Barang:</label>
									<div class="input-group col-xs-8">
			      						<input class="form-control" type="text" name="asal" required>
			   						</div>
			   			 			<br>
			   			 			<label class="control-label col-sm-3" align="right">Modal:</label>
									<div class="input-group col-xs-8">
			      						<input class="form-control" type="text" name="modal" required>
			   						</div>
			   			 			<br>
			   			 			<label class="control-label col-sm-3" align="right">Harga:</label>
									<div class="input-group col-xs-8">
			      						<input class="form-control" type="text" name="harga" required>
			   						</div>
			   			 			<br>
			   			 			<label class="control-label col-sm-3" align="right">Stock:</label>
									<div class="input-group col-xs-8">
			      						<input class="form-control" type="text" name="stock" required>
			   						</div>
			   			 			<br>
									<div class="form-group">
										<div class="col-sm-offset-5 col-sm-10">
											<button type="submit" class="btn btn-success">Tambah</button>
											<button type="submit" class="btn btn-danger" formaction="<?php echo base_url().'index.php/Rpl/homeView' ?>">Batal</button>
										</div>
									</div>
								</div>
							</form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</form>
	<?php $this->load->view("footer.php") ?>
</body>
</html>