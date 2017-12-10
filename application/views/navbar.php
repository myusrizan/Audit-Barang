<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css">
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
      padding: 5px;
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
</head>  
<body>
 <?php if ($this->session->userdata('kasta') == 3){ ?>
  <nav class="navbar navbar-default navbar-fixed-top">
   <div class="container-fluid">
   <div class="navbar-header">
             <a class="navbar-brand" href="<?php echo base_url().'index.php/Rpl/homeView'; ?>"><img src="<?php echo base_url('assets/logo2.png');?>" height="35"></a>
         </div>
         <ul class="nav navbar-nav navbar-right">
             <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('uname'); ?> </a></li>
             <li><a href="<?php echo base_url().'index.php/Rpl/logout'; ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
         </ul>
   </div>
  </nav>
 <?php } else if ($this->session->userdata('kasta') == 2){ ?>
  <nav class="navbar navbar-default navbar-fixed-top">
   <div class="container-fluid">
   <div class="navbar-header">
             <a class="navbar-brand" href="<?php echo base_url().'index.php/Rpl/homeView'; ?>"><img src="<?php echo base_url('assets/logo2.png');?>" height="40"></a>
         </div>
         <ul class="nav navbar-nav navbar-right">
             <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('uname'); ?> </a></li>
             <li><a href="<?php echo base_url().'index.php/Rpl/logout'; ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
         </ul>
   </div>
  </nav>
 <?php } else if ($this->session->userdata('kasta') == 1){ ?>
  <nav class="navbar navbar-default navbar-fixed-top">
   <div class="container-fluid">
   <div class="navbar-header">
             <a class="navbar-brand" href="<?php echo base_url().'index.php/Rpl/homeView'; ?>"><img src="<?php echo base_url('assets/logo2.png');?>" height="40"></a>
         </div>
         <ul class="nav navbar-nav">
          <li><a href="#">Statistik</a></li>
          <li><a href="<?php echo base_url().'index.php/Rpl/Report'; ?>">Report</a></li>
          <li><a href="#">Permission</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
             <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('uname'); ?> </a></li>
             <li><a href="<?php echo base_url().'index.php/Rpl/logout'; ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
         </ul>
   </div>
  </nav>
 <?php } ?>
</body>
</html>