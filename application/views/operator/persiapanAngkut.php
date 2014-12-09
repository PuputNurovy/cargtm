<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Kargo-Operator</title>

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
                            <a href="daftarKargoOp.php"><i class="fa fa-list fa-fw"></i> Daftar Kargo</a>
                        </li>
                        <li>
                            <a class="aktif" href="PersiapanAngkut.php"><i class="fa fa-tags fa-fw"></i> Persiapan Angkut Kargo</a>
                        </li>
                        <li>
                            <a href="pengambilanKargo.php"><i class="fa fa-flag fa-fw"></i> Pengambilan Kargo</a>
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
                        <div class="panel-heading" id="bHijau">
                                Persiapan Angkut Kargo
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                                <table align="right">
                                    <tr>
                                        <td>
                                                <!-- Button trigger modal -->
                            <button  class="btn btn-default bHijau" data-toggle="modal" data-target="#ubah"><i class="glyphicon glyphicon-pencil" ></i>
                                ubah
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
                                            <table style="width: 550px">
                                                    <tr width="100px" height="60px">
                                                        <td style="width: 200px">Id Kargo</td>
                                                        <td style="width: 200px"><input class="form-control" disabled></td>
                                                    </tr>         
                                                    <tr width="100px" height="60px">
                                                        <td>Id Kapal</td>
                                                        <td><input class="form-control" disabled></td>
                                                    </tr>       
                                                    <tr width="10px" height="60px">
                                                        <td>Nama Pemilik</td>
                                                        <td><input class="form-control"></td>
                                                    </tr>       
                                                    <tr width="100px" height="60px">
                                                        <td>Banyaknya Transportasi Angkutan yang Digunakan</td>
                                                        <td align="center">
                                                            <input class="form-control" style="width:40px">
                                                        </td>
                                                        <td>
                                                            <select class="form-control"  style="width: 100px">
                                                                <option>Truk</option>
                                                                <option>Craine</option>
                                                            </select>
                                                        </td>
                                                    </tr>       
                                                    <tr width="100px" height="60px">
                                                        <td>Area Penyimpanan</td>
                                                        <td>
                                                            <select class="form-control">
                                                                <option>Blok A</option>
                                                                <option>Blok B</option>
                                                                <option>Blok C</option>
                                                                <option>Blok D</option>
                                                                <option>Blok E</option>
                                                                <option>Blok F</option>
                                                                <option>Blok G</option>
                                                            </select>
                                                        </td>
                                                        <td  style="text-indent:10px" align="center">Area</td>
                                                        <td  style="width: 150px">

                                                            <select class="form-control">
                                                                <option>Blok A</option>
                                                                <option>Blok B</option>
                                                                <option>Blok C</option>
                                                                <option>Blok D</option>
                                                                <option>Blok E</option>
                                                                <option>Blok F</option>
                                                                <option>Blok G</option>
                                                            </select>
                                                        </td>
                                                    </tr>       
                                                    <tr width="100px" height="60px">
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
                            <button  class="btn btn-default bHijau" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-remove" ></i>
                                delete
                            </button>
                            <!-- Modal -->
                            <div class="modal fade"  align="left" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" align="left">Hapus User</h4>
                                        </div>
                                        <div class="modal-body">
                                            <center>Apakah anda Yakin akan menghapus data?</center>
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
                                </table>
                                <br>
                                <br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr><center>
                                            <th>ID_Kargo</th>
                                            <th>ID_Perusahaan</th>
                                            <th>Nama Pemilik</th>
                                            <th>Banyaknya Transportasi/<br>Area Yang Digunakan</th>
                                            <th>Area Penyimpanan</th>
                                            <th>Status</th>
                                        </center></tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
                                        </tr><tr class="odd gradeX">
                                            <td>001</td>
                                            <td>E50RY</td>
                                            <td>Andri M Ferdian</td>
                                            <td>1 Truk</td>
                                            <td>Blok A1</td>
                                            <td>Masuk</td>
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
    <script src="../../aset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../aset/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../aset/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../aset/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../../aset/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../../aset/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
