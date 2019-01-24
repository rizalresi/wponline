
<?php $this->load->view('templates/header') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->


    <!-- Header Navbar: style can be found in header.less -->
    <?php $this->load->view('templates/navbar') ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('templates/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->


    <!-- Main content -->
    <?php $this->load->view('admin/dashboard') ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <strong>Copyright &copy; 2019 Aktivasi Pembangunan</a></strong> 
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<?php $this->load->view('templates/footer') ?>

