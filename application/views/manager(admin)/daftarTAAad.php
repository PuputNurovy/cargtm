<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Transport-TAA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>aset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>aset/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>aset/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>aset/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>aset/css/plugins/morris.css" rel="stylesheet">

    <!-- cargtm -->
    <link href="<?php echo base_url(); ?>aset/css/style-cargtm.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>

    <div id="wrapper">

        
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" id="nav-header" role="navigation" style="margin-bottom: 0">
            <div class="nav-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="<?php echo base_url(); ?>aset/img/logo.jpg" class="shadow" style="float:left; width:40px; margin:5px"><a class="head" href="<?php echo base_url(); ?>index.php/taaHome">Cargo Terminal Management</a>
            </div>
            <!-- /.navbar-header -->

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>/index.php/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>/index.php/user"><i class="fa fa-user fa-fw"></i> Managemen User</a>
                        </li>
                        <li class="active">
                            <a href="application/views/manager(admin)/backup.php"><i class="fa fa-bullhorn fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>/index.php/persiapan">Persiapan Angkut</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/index.php/angkut">Pengambilan Kargo</a>
                                </li>
                                <li>
                                    <a class="aktif" href="<?php echo base_url(); ?>/index.php/adTaa">Transportasi dan Alat Angkut</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                        <li>
                            <a href="backup.php"><i class="fa fa-cloud fa-fw"></i> Backup dan Restore<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>/index.php/backup">Backup</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/index.php/restore">Restore</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                <br>
                <center><p align="right">Selamat Datang <a href="<?php echo base_url(); ?>index.php/taaHome" class="tHijau" >manager/puput nurovy </a><button type="button" class="btn btn-primary btn-sm bHijau">Keluar</button></p></center>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"  style="height:50px" Id="bHijau">
                            Daftar Alat Transportasi dan Alat Angkut
                            
                        </div>
                        <!-- /.panel-heading -->
                            
                                <br><br>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID_Transportasi</th>
                                            <th>Jenis</th>
                                            <th>Kondisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Truk</td>
                                            <td>rusak</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Truk</td>
                                            <td>rusak</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>T001</td>
                                            <td>Craine</td>
                                            <td>baik</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>aset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>aset/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>aset/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>aset/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</body>

</html>
