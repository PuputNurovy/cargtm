		 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="bHijau">
                                <h4>Daftar Kargo</h4>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped" style="font-size:13.5px;" id="tabel">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Provider Kargo</th>
                                                    <th>Jenis Kargo</th>
                                                    <th>Asal</th>
                                                    <th>Tujuan</th>
                                                    <th>Tgl Ambil/Angkut</th>
                                                    <th>ID Transaksi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>00122929402</td>
                                                    <td>PT PTPT</td>
                                                    <td>Jenis 1</td>
                                                    <td>Bandung</td>
                                                    <td>Bandung</td>
                                                    <td>00-00-0000</td>
                                                    <td>0000012400</td>
                                                    <td>
                                                        <a href="<?php echo base_url()?>teknisi-kargo/ubah-status-masuk/00122929402" class="btn btn-default tHijau" title="Kargo Masuk"><i class="glyphicon glyphicon-log-in"></i>
                                                        </a>
                                                        <a href="<?php echo base_url()?>teknisi-kargo/ubah-status-keluar/00122929402" class="btn btn-default tHijau" title="Kargo Keluar"><i class="glyphicon glyphicon-log-out"></i>
                                                        </a>
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
        