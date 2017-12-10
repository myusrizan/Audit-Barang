<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style1.css'); ?>" type="text/css">
    <link rel="icon" href="<?php echo base_url('assets/icon.ico');?>" type="image/x-icon">
	<style type="text/css">
    .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #337DAB;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
      padding: 10px;
    }
    .navbar li a, .navbar .navbar-brand { 
        color: #d5d5d5 !important;
    }
    .navbar-nav li a:hover {
        color: #fff !important;
    }
    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }
  </style>
	</style>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#"><img src="<?php echo base_url('assets/logo2.png');?>" height="40"></a>
    </div>
  </div>
</nav>
<div class="container" align="center" style="margin-top:15%">
    <div class="form">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center"><h2>LOGIN</h2></div>
					<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Rpl/login'; ?>">
						<div class="form-group">
							<div class="input-group col-xs-8">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	      						<input id="uname" type="text" class="form-control" name="uname" placeholder="Username">
	   						</div>
	   			 			<br>
	   			 			<div class="input-group col-xs-8">
	     						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	      						<input id="pass" type="password" class="form-control" name="pass" placeholder="Password">
	    					</div>
	    					<br>
							<div class="form-group">
								<div class="col-sm-offset-5 col-sm-7">
									<button type="submit" class="btn btn-success">LOGIN</button>
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