        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                    </div>
                <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="bHijau">
                                <h4>Pengambilan Kargo</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="tabel-pengambilan-kargo">
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
                                            <td>0219091024909</td>
                                            <td>
                                                <button  class="btn btn-default tHijau" title="Rincian transaksi"><i class="glyphicon glyphicon-search" ></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script type="text/javascript">
                                    $(function() {
                                        $('#tabel-pengambilan-kargo').dataTable({ "columnDefs": [{ "orderable": false, "targets": 2 } ] });
                                    } );
                                </script>
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