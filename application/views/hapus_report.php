<!DOCTYPE html>
<html>
<head>
	<title>Menghapus Data</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style1.css'); ?>" type="text/css">
</head>
<body>
	<form action="<?php echo base_url().'index.php/Rpl/hapusReport/'.$report->id; ?>" method="post">
		<div class="container" align="center" style="margin-top:5%">
		    <div class="form">
		        <div class="col-md-3"></div>
		        <div class="col-md-6">
		            <div class="panel panel-default">
		                <div class="panel-body">
		                    <div class="text-center"><h1>Hapus Data</h1></div>
								<div class="form-group">
									<label class="control-label">Apakah anda yakin ingin menghapus report <?php echo $report->barang ?>?</label>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-8">
											<button type="submit" class="btn btn-danger">Ya</button>
											<button type="submit" class="btn btn-success" formaction="<?php echo base_url().'index.php/Rpl/Report' ?>">Tidak</button>
										</div>
									</div>
								</div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</form>
</body>
</html>