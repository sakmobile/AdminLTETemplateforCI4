<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <link rel="stylesheet" href="<?php echo base_url('public')?>/assets/plugins/fontawesome-free/css/all.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public')?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public')?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url('public')?>/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public')?>/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('public')?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">

  <link href="<?php echo base_url('public')?>/assets/plugins/bootstrap-tagsinput/tagsinput.css?v=11" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url('public')?>/assets/adminlte/bower_components/ckeditor/ckeditor.js"></script>

  <style>
    body {
      font-family: 'Kanit', sans-serif;
      
      /*font-size: 14px;*/
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">

<div class="wrapper">
        <?php echo view('layout/header');?>
        <?php echo view('layout/menu');?>
<div class="content-wrapper">

<section class="content">
                <?php echo view($view_list);?>
  </section>
       
</div>
<?php echo view('layout/footer');?>
</div>
</body>
<script src="<?php echo base_url('public')?>/assets/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url('public')?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url('public')?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url('public')?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url('public')?>/assets/plugins/bootstrap-tagsinput/tagsinput.js?v=1"></script>

<script src="<?php echo base_url('public')?>/assets/plugins/select2/js/select2.full.min.js"></script>

<script src="<?php echo base_url('public')?>/assets/dist/js/adminlte.min.js"></script>


<script>
  $(document).ready(function () {
   
    $('.select2').select2({
      theme: 'bootstrap4'
    })
  })
</script>




<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>