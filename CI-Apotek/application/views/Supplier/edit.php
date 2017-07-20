<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Supplier</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php 
                                if (!empty($notif)) {
                                    echo '<div class ="alert alert-danger">'.$notif.'</div>';
                                }
                            ?>
                            <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Supplier/submit" enctype="multipart/from-data">
                                <div class="form-group">
                                    <label>Kode Supplier</label>
                                    <input class="form-control" type="number" name="kd_sup" required value="<?php echo $detil->KD_SUPPLIER; ?>" >
                                    <label>Nama Supplier</label>
                                    <input class="form-control" type="text" name="nm_sup" required value="<?php echo $detil->NAMA_SUPPLIER; ?>" >
                                    <label>Alamat</label>
                                    <textarea name="almt" class="form-control" required><?php echo $detil->ALAMAT; ?></textarea>
                                    <label>Kota</label>
                                    <input class="form-control" type="text" name="kota" required value="<?php echo $detil->KOTA; ?>" >
                                    <label>Nomor Telepon</label>
                                    <input class="form-control" type="number" name="no_telp" required value="<?php echo $detil->TELP; ?>" >
                                </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url()?>index.php/Supplier" class="btn btn-block btn-md btn-primary">Kembali</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
                            <!-- /.row (nested) -->