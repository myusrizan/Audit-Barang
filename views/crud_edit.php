<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Barang</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style1.css'); ?>" type="text/css">
</head>
<body>
	<div class="container">
		<?php $this->load->view('navbar'); ?>
	</div>
	<div class="container" align="center" style="margin-top:10%">
    <div class="form">	
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center" style="margin-bottom:7%"><h1>Mengedit Data Barang</h1></div>
					<form action="<?php echo base_url().'index.php/Rpl/edit_brg/'.$barang->id ?>" method="post">
						<div class="form-group">
							<label class="control-label col-sm-3" align="right">Kode Barang:</label>
							<div class="input-group col-xs-8">
	      						<input class="form-control" type="text" name="kodebarang" value="<?php echo $barang->kodeBarang; ?>" required>
	   						</div>
	   			 			<br>
	   			 			<label class="control-label col-sm-3" align="right">Nama Barang:</label>
							<div class="input-group col-xs-8">
	      						<input class="form-control" type="text" name="namabarang" value="<?php echo $barang->namaBarang; ?>" required>
	   						</div>
	   			 			<br>
	   			 			<label class="control-label col-sm-3" align="right">Asal Barang:</label>
							<div class="input-group col-xs-8">
	      						<input class="form-control" type="text" name="asal" value="<?php echo $barang->asal; ?>" required>
	   						</div>
	   			 			<br>
	   			 			<label class="control-label col-sm-3" align="right">Modal:</label>
							<div class="input-group col-xs-8">
	      						<input class="form-control" type="text" name="modal" value="<?php echo $barang->modal; ?>" required>
	   						</div>
	   			 			<br>
	   			 			<label class="control-label col-sm-3" align="right">Harga:</label>
							<div class="input-group col-xs-8">
	      						<input class="form-control" type="text" name="harga" value="<?php echo $barang->harga; ?> " required>
	   						</div>
	   			 			<br>
	   			 			<label class="control-label col-sm-3" align="right">Stock:</label>
							<div class="input-group col-xs-8">
	      						<input class="form-control" type="text" name="stock" value="<?php echo $barang->stok; ?>" required>
	   						</div>
	   			 			<br>
							<div class="form-group">
								<div class="col-sm-offset-5 col-sm-10">
									<button type="submit" class="btn btn-success">Update</button>
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
<?php $this->load->view("footer.php") ?>
</body>
</html>