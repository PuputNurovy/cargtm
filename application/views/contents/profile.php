<?php 
    if (count($infoAkun)!=0) {
        foreach ($infoAkun as $rows) {}
    }
?>        
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
                                    <form action="<?php echo base_url().$jobdesk?>/ubah-profile" method="post" role="form">
                                        <table class="table" width="70%">
                                            <tr style="visibility:hidden;">
                                                <td colspan="2"><input type="hidden" name="id" value="<?php echo isset($rows->id)?$rows->id:'';?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td><input class="form-control" type="text" name="nama" maxlength="30" required placeholder="Nama anda" value="<?php echo isset($rows->nama)?$rows->nama:'';?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Jobdesk</td>
                                                <td>
                                                    <select name="pilihJobdesk" required class="form-control">
                                                        <option value="">Pilih Jobdesk anda</option>
                                                        <option value="manager" <?php echo ($rows->jobdesk == 'Manager')?'selected':'';?>>Manager</option>
                                                        <option value="operator terminal" <?php echo ($rows->jobdesk == 'Operator Terminal')?'selected':'';?>>Operator Terminal</option>
                                                        <option value="teknisi kargo" <?php echo ($rows->jobdesk == 'Teknisi Kargo')?'selected':'';?>>Teknisi Kargo</option>
                                                        <option value="petugas transport" <?php echo ($rows->jobdesk == 'Petugas Transport')?'selected':'';?>>Transport & Alat Angkut</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>    
                                                <td>Nama Akun</td>
                                                <td><input class="form-control" type="text" name="namaAkun" maxlength="12" required placeholder="Nama akun anda" value="<?php echo isset($rows->nama_akun)?$rows->nama_akun:'';?>"></td>
                                            </tr>
                                            <tr>    
                                                <td>Kata Sandi</td>
                                                <td><input class="form-control" type="password" name="kataSandi" maxlength="16" required placeholder="Kata sandi anda" value="<?php echo isset($rows->kata_sandi)?$rows->kata_sandi:'';?>"></td>
                                            </tr>
                                            <tr>    
                                                <td colspan="2" align="left">
                                                    <button  class="btn btn-default tHijau" title="Ubah" type="submit">Ubah
                                                    </button> 
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
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