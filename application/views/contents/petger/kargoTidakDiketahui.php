        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                    </div>
                    <div class="modal fade" align="left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel" align="left">Tambah</h4>
                                </div>
                                <div class="modal-body">
                                    <center>
                                         <table style="width: 70%">
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">ID Kargo</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="15"></td>
                                            </tr> 
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Asal Kargo</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="20"></td>
                                            </tr>         
                                         </table>
                                    </center>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="modal fade"  align="Center"  id="hapus-kargo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel" align="left">Peringatan!</h4>
                                </div>
                                <div class="modal-body">
                                    <center>Apakah anda Yakin akan menghapus kargo ini?</center>
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
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="bHijau" align="right">
                                <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#tambah"><i class="glyphicon glyphicon-plus" ></i>
                                    Tambah
                                </button>  
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Kargo</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>DAK1024245233</td>
                                                <td>24 Juni 2014</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#hapus-kargo" title="Tombol Hapus"><i class="glyphicon glyphicon-trash"></i>
                                                    </button>
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
            </div>
            <!-- /.container-fluid -->
        </div>