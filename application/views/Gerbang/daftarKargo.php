<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard-Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../aset/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../aset/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../aset/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../aset/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="../../aset/css/plugins/morris.css" rel="stylesheet">

    <!-- cargtm -->
    <link href="../../aset/css/style-cargtm.css" rel="stylesheet" type="text/css">

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
                <img src="../../aset/img/logo.jpg" class="shadow" style="float:left; width:40px; margin:5px"><a class="head" href="index.php">Cargo Terminal Management</a>
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
                            <a class="aktif" href="DaftarKargo.php"><i class="fa fa-user fa-fw"></i> Daftar Kargo</a>
                        </li>
                        <li>
                            <a href="Unknown.php"><i class="fa fa-circle fa-fw"></i> Daftar Unkown Kargo</a>
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
                <center><p align="right">Selamat Datang <a href="index.html" class="tHijau" >manager/puput nurovy </a><button type="button" class="btn btn-primary btn-sm bHijau">Keluar</button></p></center>
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="bHijau" align="right">
                            <table>
                                <tr>
                                    <td>
                                        <!-- Button trigger modal -->
                            <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#ubah"><i class="glyphicon glyphicon-pencil" ></i>
                                ubah status
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" align="left" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" align="left">Ubah</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table style="width: 450px">
                                                    <tr width="50px" height="40px">
                                                        <td>Id Kargo</td>
                                                        <td><input class="form-control" disabled></td>
                                                    </tr>         
                                                    <tr width="50px" height="40px">
                                                        <td>Id Kapal</td>
                                                        <td><input class="form-control" disabled></td>
                                                    </tr>       
                                                    <tr width="50px" height="40px">
                                                        <td>Nama Pemilik</td>
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
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id Kargo</th>
                                            <th>Id Kapal</th>
                                            <th>Nama Pemilik</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A1002</td>
                                            <td>K001</td>
                                            <td>Mark Zuckerberg</td>
                                            <td>Masuk</td>
                                        </tr>
                                        <tr>
                                            <td>A1002</td>
                                            <td>K001</td>
                                            <td>Mark Zuckerberg</td>
                                            <td>Masuk</td>
                                        </tr>
                                        <tr>
                                            <td>A1002</td>
                                            <td>K001</td>
                                            <td>Mark Zuckerberg</td>
                                            <td>Masuk</td>
                                        </tr>
                                        <tr>
                                            <td>A1002</td>
                                            <td>K001</td>
                                            <td>Mark Zuckerberg</td>
                                            <td>Masuk</td>
                                        </tr>
                                        <tr>
                                            <td>A1002</td>
                                            <td>K001</td>
                                            <td>Mark Zuckerberg</td>
                                            <td>Keluar</td>
                                        </tr>
                                        <tr>
                                            <td>A1002</td>
                                            <td>K001</td>
                                            <td>Mark Zuckerberg</td>
                                            <td>Keluar</td>
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
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../aset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../aset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../aset/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../aset/js/sb-admin-2.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="../../aset/js/plugins/flot/excanvas.min.js"></script>
    <script src="../../aset/js/plugins/flot/jquery.flot.js"></script>
    <script src="../../aset/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../../aset/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../../aset/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../../aset/js/plugins/flot/flot-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../aset/js/sb-admin-2.js"></script>

</body>

</html>
