<!DOCTYPE html>
<html>

<head>
    <?php //$this->load->view('primer/head');
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MEDILINK</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php $this->load->view('primer/header'); ?>


        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <?php $this->load->view('primer/left_side'); ?>


        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Master
                    <small>TINDAKAN DAN DIAGNOSAaa</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Master</a></li>
                    <li class="active">Tambah User</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">DIAGNOSA</h3>
                        <form>
                            <input class="search" type="text" placeholder="Cari..." required>
                            <input class="button" type="button" value="Cari">
                        </form>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>
                                        <center>No</center>
                                    </th>
                                    <th>
                                        <center>Kode ICD</center>
                                    </th>
                                    <th>
                                        <center>Nama ICD</center>
                                    </th>
                                    <th>
                                        <center>Kode KTD</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Q991</td>
                                    <td>46, XX true hemaprodite</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Z364</td>
                                    <td>A/n screen fetal gwth retard using ultrasound oth phys meth</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>R852</td>
                                    <td>Ab fin spec fm dig org & abd cav ab lev oth drug med bio sub</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>A42.1</td>
                                    <td>Abdominal actinomycosis</td>
                                    <td> </td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>171.3</td>
                                    <td>Abdominal aortic aneurysm, ruptured</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>171.4</td>
                                    <td>Abdominal aortic aneurysm, without mention of rupture</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>O000</td>
                                    <td>Abdominal pregnancy</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>R193</td>
                                    <td>Abdominal rigidity</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>R872</td>
                                    <td>Abn find female genital org abn lev oth drug meds biol subs</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>R873</td>
                                    <td>Abn find female genital org abn lev subs chief nonmed sorce</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>R871</td>
                                    <td>Abn find in specs from fem genital org abn lev of hormones</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>R876</td>
                                    <td>Abn find in specs from female genital org abn cytol findings</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>R874</td>
                                    <td>Abn find in specs from fem genital org abn imanuel find</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>R875</td>
                                    <td>Abn find in specs from fem genital org abn microdol find</td>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-danger pull-right">Batal</button>
                        <button type="submit" class="btn btn-info pull-right">Simpan</button>
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>
        </div>
        <!-- /.box -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('primer/footer'); ?>


    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <?php //$this->load->view('primer/jse');
    ?>

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- bootstrap color picker -->
    <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
        $(function() {
                    //Initialize Select2 Elements
                    $('.select2').select2()

                    //Datemask dd/mm/yyyy
                    $('#datemask').inputmask('dd/mm/yyyy', {
                        'placeholder': 'dd/mm/yyyy'
                    })
                    //Datemask2 mm/dd/yyyy
                    $('#datemask2').inputmask('mm/dd/yyyy', {
                        'placeholder': 'mm/dd/yyyy'
                    })
                    //Money Euro
                    $('[data-mask]').inputmask()

                    //Date range picker
                    $('#reservation').daterangepicker()
                    //Date range picker with time picker
                    $('#reservationtime').daterangepicker({
                        timePicker: true,
                        timePickerIncrement: 30,
                        format: 'MM/DD/YYYY h:mm A'
                    })
                    //Date range as a button
                    $('#daterange-btn').daterangepicker({
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                            },
                            startDate: moment().subtract(29, 'days'),
                            endDate: moment()
                        },
                        function(start, end) {
                            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                        }
                    )

                    //Date picker
                    $('#datepicker').datepicker({
                        autoclose: true
                    })

                    //iCheck for checkbox and radio inputs
                    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                        checkboxClass: 'icheckbox_minimal-blue',
                        radioClass: 'iradio_minimal-blue'
                    })
                    //Red color scheme for iCheck
                    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                        checkboxClass: 'icheckbox_minimal-red',
                        radioClass: 'iradio_minimal-red'
                    })
                    //Flat red color scheme for iCheck
                    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                        checkboxClass: 'icheckbox_flat-green',
                        radioClass: 'iradio_flat-green'
                    })

                    //Colorpicker
                    $('.my-colorpicker1').colorpicker()
                    //color picker with addon
                    $('.my-colorpicker2').colorpicker()

                    //Timepicker
                    $('.timepicker').timepicker({
                        showInputs: false
                    })
                    $(function() {
                        $('#example1').DataTable()
                        $('#example2').DataTable({
                            'paging': true,
                            'lengthChange': false,
                            'searching': false,
                            'ordering': true,
                            'info': true,
                            'autoWidth': false
                        })
                    })
    </script>
</body>

</html>