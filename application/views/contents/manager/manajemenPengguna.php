        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row"><br>
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-md-12">
                        <?php if($this->session->flashdata('flashSuccess')){?>
                          <div class="alert alert-dismissable alert-success" id="alert">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Sukses!</strong> <?php echo $this->session->flashdata('flashSuccess')?>
                          </div>
                        <?php } ?>
                        <?php if($this->session->flashdata('flashError')){?>
                          <div class="alert alert-dismissable alert-danger" id="alert">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Gagal!</strong> <?php echo $this->session->flashdata('flashError')?>
                          </div>
                        <?php } ?>
                    </div>
                    <script type="text/javascript">
                      $(document).ready( function() {
                            $('#alert').delay(3000).fadeOut();
                          });
                    </script>
                    <div class="col-lg-12">
                        <!-- Modal -->
                        <div class="modal fade" align="left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="<?php echo base_url();?>manager/tambah-pengguna" method="post" id="form-insert" role="form">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel" align="left">Tambah Pengguna</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                                <table style="width: 100%">
                                                    <tr width="50px" height="40px">
                                                        <td>Jobdesk</td>
                                                        <td>
                                                            <select class="form-control" name="pilihJobdesk" required>
                                                                <option value="">Pilih Jobdesk</option>
                                                                <option value="Operator Terminal">Operator Terminal</option>
                                                                <option value="Petugas Gerbang">Petugas Gerbang</option>
                                                                <option value="Petugas Transport">Petugas Transport & Alat Angkut</option>
                                                            </select>
                                                        </td>
                                                    </tr>          
                                                    <tr width="50px" height="40px">
                                                        <td>Nama</td>
                                                        <td><input class="form-control" required placeholder="Nama"  name="nama" type="text" maxlength="30"></td>
                                                    </tr>       
                                                    <tr width="50px" height="40px">
                                                        <td>Nama Akun</td>
                                                        <td><input class="form-control" required placeholder="Nama akun" name="namaAkun" type="text" maxlength="12"></td>
                                                    </tr>       
                                                    <tr width="50px" height="40px">
                                                        <td>Kata Sandi</td>
                                                        <td><input class="form-control" required placeholder="Kata sandi" name="kataSandi" type="password" maxlength="16"></td>
                                                    </tr>         
                                                </table>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="modal fade"  align="Center"  id="hapus-pengguna" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Peringatan!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <center>Apakah anda Yakin akan menghapus pengguna ini?</center>
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
                        <div class="modal fade"  align="Center"  id="atur-ulang-kata-sandi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" align="left">Peringatan!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <center>Apakah anda Yakin akan atur ulang kata sandi pengguna ini?</center>
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
                        <div class="panel panel-default">
                            <div class="panel-heading" id="bHijau" align="right">
                                <!-- Button trigger modal -->
                                <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus" ></i>
                                    Tambah
                                </button>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="tabel">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nama Akun</th>
                                                <th>Jobdesk</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($dataPengguna as $rows) {
                                         ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $rows->nama;?></td>
                                                <td><?php echo $rows->nama_akun;?></td>
                                                <td><?php echo $rows->jobdesk;?></td>
                                                <td>                                             
                                                    <!-- Button trigger modal -->
                                                    <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#atur-ulang-kata-sandi" title="Tombol Atur Ulang Kata Sandi"><i class="glyphicon glyphicon-wrench" ></i>
                                                    </button> 
                                                    <!-- Button trigger modal -->
                                                    <button  class="btn btn-default tHijau" data-toggle="modal" data-target="#hapus-pengguna" title="Tombol Hapus"><i class="glyphicon glyphicon-trash"></i>
                                                    </button>
                                                    <!-- /.modal --> 
                                                </td>
                                            </tr>       
                                         <?php
                                                $no++;
                                            }
                                         ?>
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