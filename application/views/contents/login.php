<div class="container">
    <div class="row">
        
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="border:none;">
                <div class="panel-heading" id="bHijau">
                    <h3 class="panel-title" style="color: white;">Silahkan Masuk</h3>
                </div>
                <div class="panel-body" >
                    <form action="<?php echo base_url();?>autentikasi" method="post" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama User" name="namaAkun" type="text" maxlength="12" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Kata Sandi" name="kataSandi" type="password" maxlength="16" autofocus required>
                            </div>
                            <div class="form-group">
                                <select name="pilihJobdesk" required class="form-control">
                                    <option value="">Pilih Jobdesk anda</option>
                                    <option value="manager">Manager</option>
                                    <option value="operator terminal">Operator Terminal</option>
                                    <option value="teknisi kargo">Teknisi Kargo</option>
                                    <option value="petugas transport">Transport & Alat Angkut</option>
                                </select>
                            </div>
                            
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block bHijau" name="btn_masuk" type="submit">Masuk</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div style="margin-top:30px;">             
                <?php if($this->session->flashdata('flashError')){?>
                  <div class="alert alert-dismissable alert-danger" id="alert1">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <strong>Gagal!</strong> <?php echo $this->session->flashdata('flashError')?>
                  </div>
                <?php } ?>
            </div>
            <script type="text/javascript">
              $(document).ready( function() {
                    $('#alert1').delay(3000).fadeOut();
                  });
            </script>
        </div>
    </div>
</div>