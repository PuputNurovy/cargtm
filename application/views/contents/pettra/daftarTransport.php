        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="modal fade"  align="Center"  id="hapus-transport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <form action="<?php echo base_url();?>petugas-transport/hapus-transport" method="post" role="form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Peringatan!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="idTransportasi" id="idTransportasi">
                                        <center>Apakah anda Yakin akan menghapus transport ini?</center>
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
                    <div class="modal fade" align="left" id="tambah-transport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="<?php echo base_url();?>petugas-transport/tambah-transport" method="post" role="form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Tambah Data</h4>
                                    </div>
                                    <div class="modal-body" align="center">
                                        <table style="width: 70%">
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Nama</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="30" name="providerKapal" placeholder="Nama" required></td>
                                            </tr>         
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Jenis</td>
                                                <td style="width: 200px">
                                                    <select name="jenis" class="form-control" required>
                                                        <option value="">Pilih Jenis</option>
                                                        <option value="">Transportasi</option>
                                                        <option value="">Alat Angkut</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Tanggal Pembelian</td>
                                                <td style="width: 200px"><input class="form-control" type="date" name="kodeKapal" placeholder="Kode Kapal" required></td>
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
                    <div class="modal fade" align="left" id="ubah-transport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="<?php echo base_url();?>petugas-transport/ubah-transport" method="post" role="form">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Tambah Data</h4>
                                    </div>
                                    <div class="modal-body" align="center">
                                        <table style="width: 70%">
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">ID Transportasi</td>
                                                <td style="width: 200px"><input type="text" class="form-control" name="idTransport" id="idTransport" readonly></td>
                                            </tr>
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Nama</td>
                                                <td style="width: 200px"><input class="form-control" type="text" maxlength="30" name="nama" id="nama" placeholder="Nama" required></td>
                                            </tr>         
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Jenis</td>
                                                <td style="width: 200px">
                                                    <select name="jenis" class="form-control" id="jenis" required>
                                                        <option value="">Pilih Jenis</option>
                                                        <option value="">Transportasi</option>
                                                        <option value="">Alat Angkut</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr width="100px" height="60px">
                                                <td style="width: 200px">Tanggal Pembelian</td>
                                                <td style="width: 200px"><input class="form-control" type="date" name="tglPembelian" id="tglPembelian" placeholder="Kode Kapal" required></td>
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
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" Id="bHijau" align="right">
                                <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#tambah-transport"><i class="glyphicon glyphicon-plus" ></i>
                                    Tambah
                                </button>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" style="font-size:14px;" id="tabel">
                                        <thead>
                                            <tr>
                                                <th>ID Tranportasi</th>
                                                <th>Nama </th>
                                                <th>Jenis</th>
                                                <th>Tanggal Pembelian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>T001</td>
                                                <td>Nama</td>
                                                <td>Jenis</td>
                                                <td>00-00-0000 00:00:00</td>
                                                <td>
                                                    <button  class="btn btn-default tHijau" title="Ubah transport" onclick="showUbahTransport(1)"><i class="glyphicon glyphicon-edit" ></i>
                                                    </button> 
                                                    <!-- Button trigger modal -->
                                                    <button  class="btn btn-default tHijau" title="Hapus transport" onclick="showHapusTransport(1)"><i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->

            </div>
            <!-- /.container-fluid -->
        </div>