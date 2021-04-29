<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="icon" href="<?php echo base_url(); ?>/template/img/favicon.ico">

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/template/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/template/js/jquery-3.1.0.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/css/font-awesome/css/font-awesome.min.css">
    <!-- Sweet Alert css -->
    <link href="<?php echo base_url(); ?>/template/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Izi Alert-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/plugins/izi/dist/css/iziToast.min.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/template/plugins/izi/dist/js/iziToast.min.js"></script>
    <!-- jqueryui -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/template/plugins/jqueryui/jquery-ui.css">
    <script src="<?php echo base_url(); ?>/template/plugins/jqueryui/jquery-ui.js" type="text/javascript"></script>
  </head>
  <body>
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CRUD CodeIgniter</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo base_url('admin/barang'); ?>"><i class="fa fa-building-o"></i> Barang</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
        <?php 
          echo $_content;
        ?>
    </div>
    <script type="text/javascript">
      $(function(){
        $('.example').DataTable();
      })
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/template/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>/template/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/template/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url(); ?>/template/plugins/chart.js/Chart.js"></script>
    <!-- Sweet Alert Js  -->
    <script src="<?php echo base_url(); ?>/template/plugins/sweet-alert/sweetalert2.min.js"></script>
  </body>
</html>