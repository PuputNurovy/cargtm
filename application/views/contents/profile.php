        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title;?></h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" Id="bHijau">
                                <h4>Info Akun</h4>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive" align="left">
                                    <table width="70%">
                                        <tr>
                                            <td>Nama</td>
                                            <td><input class="form-control" type="text" name="nama" maxlength="30" required placeholder="Nama anda"></td>
                                        </tr>
                                        <tr>
                                            <td>Jobdesk</td>
                                            <td>
                                                <select name="pilihJobdesk" required class="form-control">
                                                    <option value="">Pilih Jobdesk anda</option>
                                                    <option value="manager">Manager</option>
                                                    <option value="operator terminal">Operator Terminal</option>
                                                    <option value="petugas gerbang">Petugas Gerbang</option>
                                                    <option value="petugas transport">Transport & Alat Angkut</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>    
                                            <td>Nama Akun</td>
                                            <td><input class="form-control" type="text" name="namaAkun" maxlength="12" required placeholder="Nama akun anda"></td>
                                        </tr>
                                        <tr>    
                                            <td>Kata Sandi</td>
                                            <td><input class="form-control" type="text" name="kataSandi" maxlength="16" required placeholder="Kata sandi anda"></td>
                                        </tr>
                                        <tr>    
                                            <td colspan="2" align="left">
                                                <button  class="btn btn-default tHijau" title="Ubah" type="submit">Ubah
                                                </button> 
                                            </td>
                                        </tr>
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