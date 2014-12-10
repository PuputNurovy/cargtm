<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Managemen User</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>aset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>aset/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>aset/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>aset/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <img src="<?php echo base_url(); ?>aset/img/logo.jpg" class="shadow" style="float:left; width:40px; margin:5px"><a class="head" href="<?php echo base_url(); ?>index.php/home">Cargo Terminal Management</a>
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
                            <a class="aktif" href="<?php echo base_url(); ?>/index.php/user"><i class="fa fa-user fa-fw"></i> Managemen User</a>
                        </li>
                        <li>
                            <a href="backup.php"><i class="fa fa-bullhorn fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>/index.php/persiapan">Persiapan Angkut</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/index.php/angkut">Pengambilan Kargo</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>/index.php/adTaa">Transportasi dan Alat Angkut</a>
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
                <div class="row"><br>
                    <div class="col-lg-12">
                        <center><p align="right">Selamat Datang <a href="<?php echo base_url(); ?>/index.php/home" class="tHijau" >manager/puput nurovy </a><button type="button" class="btn btn-primary btn-sm bHijau">Keluar</button></p></center>
                        <h1 class="page-header">Managemen User-Admin</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="bHijau" align="right">
                            <!-- Button trigger modal -->
                            <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus" ></i>
                                tambah
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" align="left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" align="left">Tambah User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo base_url();?>insertUser" method="post" id="form-insert" role="form">
                                            <table style="width: 450px">
                                                    <tr width="50px" height="40px">
                                                        <td>Jobdesk</td>
                                                        <td>
                                                            <select class="form-control" id="jobdesk" name="jobdesk">
                                                                <option>Operator Terminal</option>
                                                                <option>Petugas Gerbang</option>
                                                                <option>Petugas Transport dan Alat Angkut</option>
                                                            </select>
                                                        </td>
                                                    </tr>  
                                                    <tr width="50px" height="40px">
                                                        <td>Id User</td>
                                                        <td><input class="form-control" required placeholder="Id User" id="idUser" name="idUser"></td>
                                                    </tr>         
                                                    <tr width="50px" height="40px">
                                                        <td>Nama User</td>
                                                        <td><input class="form-control" required placeholder="Nama User" id="namaUser" name="namaUser"></td>
                                                    </tr>       
                                                    <tr width="50px" height="40px">
                                                        <td>Email</td>
                                                        <td><input class="form-control" required placeholder="Email" id="emailUser" name="namaUser"></td>
                                                    </tr>       
                                                    <tr width="50px" height="40px">
                                                        <td>No Handphone</td>
                                                        <td><input class="form-control" required placeholder="No Handphone" id="handphone" name="handphone"></td>
                                                    </tr>         
                                            </table>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Simpan</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal --> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Nama</th>
                                            <th>Job Desk</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>operator</td>
                                            <td>                                             
                                                <!-- Button trigger modal -->
                                                <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#ubah"><i class="glyphicon glyphicon-pencil" ></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="ubah"  align="left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel" align="left">Modal title</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table style="width: 450px">
                                                                        <tr width="50px" height="40px">
                                                                            <td>Jobdesk</td>
                                                                            <td>
                                                                                <select class="form-control" disabled>
                                                                                    <option disabled>Operator Terminal</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>  
                                                                        <tr width="50px" height="40px">
                                                                            <td>Id User</td>
                                                                            <td><input class="form-control" disabled></td>
                                                                        </tr>         
                                                                        <tr width="50px" height="40px">
                                                                            <td>Nama User</td>
                                                                            <td><input class="form-control"></td>
                                                                        </tr>       
                                                                        <tr width="50px" height="40px">
                                                                            <td>Email</td>
                                                                            <td><input class="form-control"></td>
                                                                        </tr>       
                                                                        <tr width="50px" height="40px">
                                                                            <td>No Handphone</td>
                                                                            <td><input class="form-control"></td>
                                                                        </tr>       
                                                                        <tr width="50px" height="40px">
                                                                            <td>Status</td>
                                                                            <td>
                                                                                <select class="form-control">
                                                                                    <option>Aktif</option>
                                                                                    <option>Tidak Aktif</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>  

                                                                 </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Simpan</button>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->  
                                                <!-- Button trigger modal -->
                                                <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-remove" ></i>
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade"  align="Center"  id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel" align="left">Hapus User</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <center>Apakah anda Yakin akan menghapus user?</center>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Ya</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal --> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>
                <!-- /.row -->
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

    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>
</body>

</html>
