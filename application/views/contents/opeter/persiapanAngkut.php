        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Modal -->
                    <div class="modal fade" align="left" id="tambah-transaksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="<?php echo base_url();?>operator-terminal/tambah-angkut" method="post" role="form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Tambah Transaksi Persiapan Angkut</h4>
                                    </div>
                                    <div class="modal-body" align="center">
                                        <table style="width: 70%">
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Tanggal Pengangkutan</td>
                                                <td style="width: 200px"><input class="form-control" type="date" name="tanggalPengangkutan" ></td>
                                            </tr>
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Provider Kapal</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="30" name="providerKapal" placeholder="Nama Provider Kapal" required></td>
                                            </tr>         
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Kode Kapal</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="15" name="kodeKapal" placeholder="Kode Kapal" required></td>
                                            </tr>         
                                         </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </form>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="modal fade" align="left" id="ubah-transaksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="<?php echo base_url();?>operator-terminal/ubah-angkut" method="post" role="form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Ubah Transaksi Persiapan Angkut</h4>
                                    </div>
                                    <div class="modal-body" align="center">
                                        <table style="width: 70%">
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">ID Transaksi</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="16" name="idTransaksi" readonly id="idTransaksi"></td>
                                            </tr>  
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Tanggal Transaksi</td>
                                                <td style="width: 200px"><input class="form-control" type="text" name="tanggal" readonly id="tanggalTransaksi"></td>
                                            </tr>
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Tanggal Pengangkutan</td>
                                                <td style="width: 200px"><input class="form-control" type="date" name="tanggalPengangkutan" id="tanggalPengangkutan" required></td>
                                            </tr>  
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Provider Kapal</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="30" name="providerKapal" placeholder="Nama Provider Kapal" id="providerKapal" required></td>
                                            </tr>         
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Kode Kapal</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="15" name="kodeKapal" placeholder="Kode Kapal" id="kodeKapal" required></td>
                                            </tr>         
                                         </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    </div>
                                </div>
                            </form>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <div class="modal fade"  align="Center"  id="hapus-transaksi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <form action="<?php echo base_url();?>operator-terminal/hapus-angkut" method="post" role="form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Peringatan!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="idTransaksiAngkut" id="idTransaksiAngkut">
                                        <center>Apakah anda Yakin akan menghapus transaksi ini?</center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Ya</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </form>
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
                                <button  class="btn btn-default tHijau" data-toggle="modal" onclick="showTambahTransaksiAngkut()"><i class="glyphicon glyphicon-plus" ></i>
                                    Tambah
                                </button>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="font-size:14px;" id="tabel">
                                            <thead>
                                                <tr>
                                                    <center>
                                                        <th>ID Transaksi</th>
                                                        <th>Tanggal Transaksi</th>
                                                        <th>Tanggal Angkut</th>
                                                        <th>Provider Kapal</th>
                                                        <th>Kode Kapal</th>
                                                        <th>Aksi</th>
                                                    </center>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>001</td>
                                                    <td>00-00-0000 00:00:00</td>
                                                    <td>01/12/14</td>
                                                    <td>PT. PT</td>
                                                    <td>38538583959103</td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>operator-terminal/rincian-transaksi-persiapan/001"  class="btn btn-default tHijau" title="Tambahkan Kargo yang akan diambil"><i class="glyphicon glyphicon-plus" ></i>
                                                        </a>
                                                         <!-- Button trigger modal -->
                                                        <button  class="btn btn-default tHijau" data-toggle="modal" onclick="showUbahTransaksiAngkut(1)" title="Ubah transaksi"><i class="glyphicon glyphicon-edit" ></i>
                                                        </button> 
                                                        <!-- Button trigger modal -->
                                                        <button  class="btn btn-default tHijau" data-toggle="modal" onclick="showHapusTransaksiAngkut(1)" title="Hapus traskasi"><i class="glyphicon glyphicon-trash"></i>
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