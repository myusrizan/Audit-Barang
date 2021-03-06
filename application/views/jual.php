<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css">
</head>
<body>
	<div class="container">
		<?php $this->load->view('navbar'); ?>
	</div>
	<div class="container" style="margin-top:50px">
		<h2>Jual</h2>
		<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Rpl/jualProses/'.$barang->id; ?>">
			<div class="form-group">
				<label class="control-label col-sm-3">Barang terjual:</label>
				<div class="col-xs-1">
					<input name="pegawai" type="hidden" value="<?php echo $this->session->userdata('uname'); ?>">
					<input name="terjual" type="number" min="0" max="<?php echo $barang->stok ?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
			</div>
		</form>
	</div>
    <?php $this->load->view("footer.php") ?>
</body>
</html>