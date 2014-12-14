        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Modal -->
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                        <a href="<?php echo base_url();?>operator-terminal/pengambilan-kargo" class="btn btn-default tHijau" title="Kembali"><i class="glyphicon glyphicon-back"></i> Kembali</a>
                        <br/><br/>
                    </div>

                    <div class="col-lg-12">
                        <table class="table">
                            <tr>
                                <td width="20%">ID Transaksi</td>
                                <td width="3%">:</td>
                                <td align="left">000</td>
                            </tr>
                            <tr>
                                <td>Tanggal Transaksi</td>
                                <td>:</td>
                                <td>000000</td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengambilan</td>
                                <td>:</td>
                                <td>000000</td>
                            </tr>
                            <tr>
                                <td>Provider Kapal</td>
                                <td>:</td>
                                <td>000000</td>
                            </tr>
                            <tr>
                                <td>Kode Kapal</td>
                                <td>:</td>
                                <td>000000</td>
                            </tr>
                            <tr>
                                <td>Rincian Kargo</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default" >
                            <div class="panel-heading" id="bHijau" align="right">
                                <button  class="btn btn-default tHijau" data-toggle="modal" onclick="showTambahRincianPengambilan()"><i class="glyphicon glyphicon-plus" ></i> Tambah</button>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="modal fade" align="left" id="tambah-rincian-pengambilan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="<?php echo base_url();?>operator-terminal/tambah-rincian-pengambilan" method="post" role="form">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel" align="left">Tambah Rincian Kargo</h4>
                                            </div>
                                            <div class="modal-body" align="center">
                                                <table style="width: 70%">
                                                    <tr width="100px" height="60px">
                                                        <td>Provider Kargo</td>
                                                        <td><input class="form-control" type="text" name="providerKargo" placeholder="Provider kargo" required></td>
                                                    </tr>
                                                    <tr width="100px" height="60px">
                                                        <td>Jenis Kargo</td>
                                                        <td>
                                                            <select class="form-control" name="jenisKargo" required>
                                                                <option value="">Pilih Jenis</option>
                                                                <option value="1">Jenis 1</option>
                                                                <option value="2">Jenis 2</option>
                                                                <option value="3">Jenis 3</option>
                                                            </select>
                                                        </td>
                                                    </tr>         
                                                    <tr width="100px" height="60px">
                                                        <td>Asal</td>
                                                        <td><input class="form-control" type="text" maxlength="20" name="asalKargo" placeholder="Asal kargo" required></td>
                                                    </tr> 
                                                    <tr width="100px" height="60px">
                                                        <td>Tujuan</td>
                                                        <td><input class="form-control" type="text" maxlength="20" name="tujuanKargo" placeholder="Tujuan kargo" required></td>
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
                            <div class="modal fade" align="left" id="ubah-rincian-pengambilan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="<?php echo base_url();?>operator-terminal/ubah-rincian-pengambilan" method="post" role="form">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel" align="left">Ubah data Kargo</h4>
                                            </div>
                                            <div class="modal-body" align="center">
                                                <table style="width: 70%">
                                                    <tr width="100px" height="60px">
                                                        <td>ID </td>
                                                        <td><input class="form-control" type="text" maxlength="16" name="idKargo" readonly id="idKargo"></td>
                                                    </tr>
                                                    <tr width="100px" height="60px">
                                                        <td>Provider Kargo</td>
                                                        <td><input class="form-control" type="text" name="providerKargo" placeholder="Provider kargo" id="providerKargo" required></td>
                                                    </tr>
                                                    <tr width="100px" height="60px">
                                                        <td>Jenis Kargo</td>
                                                        <td>
                                                            <select class="form-control" name="jenisKargo" id="jenisKargo" required>
                                                                <option value="">Pilih Jenis</option>
                                                                <option value="1">Jenis 1</option>
                                                                <option value="2">Jenis 2</option>
                                                                <option value="3">Jenis 3</option>
                                                            </select>
                                                        </td>
                                                    </tr>         
                                                    <tr width="100px" height="60px">
                                                        <td>Asal</td>
                                                        <td><input class="form-control" type="text" maxlength="20" name="asalKargo" placeholder="Asal kargo" id="asalKargo" required></td>
                                                    </tr> 
                                                    <tr width="100px" height="60px">
                                                        <td>Tujuan</td>
                                                        <td><input class="form-control" type="text" maxlength="20" name="tujuanKargo" placeholder="Tujuan kargo" id="tujuanKargo" required></td>
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
                            <div class="modal fade"  align="Center"  id="hapus-rincian-pengambilan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <form action="<?php echo base_url();?>operator-terminal/hapus-rincian-pengambilan" method="post" role="form">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel" align="left">Peringatan!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="idKargoPengambilan" id="idKargoPengambilan">
                                                <center>Apakah anda Yakin akan menghapus kargo ini?</center>
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
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="font-size:14px;" id="tabel">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Provider Kargo</th>
                                                    <th>Jenis Kargo</th>
                                                    <th>Asal</th>
                                                    <th>Tujuan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td>00122929402</td>
                                                    <td>Kuma</td>
                                                    <td>Jenis 1</td>
                                                    <td>Singasari</td>
                                                    <td>Bandung</td>
                                                    <td>
                                                        <button  class="btn btn-default tHijau" data-toggle="modal" onclick="showUbahRincianPengambilan(1)" title="Ubah transaksi"><i class="glyphicon glyphicon-edit" ></i>
                                                        </button> 
                                                        <!-- Button trigger modal -->
                                                        <button  class="btn btn-default tHijau" data-toggle="modal" onclick="showHapusRincianPengambilan(1)" title="Hapus traskasi"><i class="glyphicon glyphicon-trash"></i>
                                                        </button>
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