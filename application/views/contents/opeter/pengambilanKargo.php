        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Modal -->
                    <div class="modal fade" align="left" id="tambah-transaksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel" align="left">Tambah Transaksi Pengambilan Kargo</h4>
                                </div>
                                <div class="modal-body" align="center">
                                    <table style="width: 70%">
                                        <tr width="100px" height="60px">
                                            <td style="width: 200px">Provider Kapal</td>
                                            <td style="width: 200px"><input class="form-control" type="text" maxlength="30" name="providerKapal" placeholder="Nama Provider Kapal"></td>
                                        </tr>         
                                        <tr width="100px" height="60px">
                                            <td style="width: 200px">Kode Kapal</td>
                                            <td style="width: 200px"><input class="form-control" type="text" maxlength="15" name="kodeKapal" placeholder="Kode Kapal"></td>
                                        </tr>         
                                     </table>
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
                    <!-- /.modal -->
                    <!-- Modal -->
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default" >
                            <div class="panel-heading" id="bHijau" align="right">
                                <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#tambah-transaksi"><i class="glyphicon glyphicon-plus" ></i>
                                    Tambah
                                </button>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <center>
                                                        <th>ID Transaksi</th>
                                                        <th>Provider Kapal</th>
                                                        <th>Kode Kapal</th>
                                                        <th>Aksi</th>
                                                    </center>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>001</td>
                                                    <td>PT. PT</td>
                                                    <td>38538583959103</td>
                                                    <td>
                                                        <button  class="btn btn-default tHijau" title="Rincian transaksi"><i class="glyphicon glyphicon-search" ></i>
                                                        </button>
                                                         <!-- Button trigger modal -->
                                                        <button  class="btn btn-default tHijau" title="Ubah transaksi"><i class="glyphicon glyphicon-edit" ></i>
                                                        </button> 
                                                        <!-- Button trigger modal -->
                                                        <button  class="btn btn-default tHijau" title="Hapus traskasi"><i class="glyphicon glyphicon-trash"></i>
                                                        </button>
                                                        <!-- /.modal --> 

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>