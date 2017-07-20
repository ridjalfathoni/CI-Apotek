<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Obat</h1>
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
                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/Obat/submit" enctype="multipart/from-data">
                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input class="form-control" type="number" name="kd_obat" required>
                                            <label>Kode Supplier</label>
                                            <select class="form-control" name="kd_sup">
                                            <?php 
                                               foreach ($supplier as $data) {
                                                   echo '
                                                    <option>'.$data->KD_SUPPLIER.'</option>
                                                   ';
                                                } 
                                             ?>
                                                
                                            </select>
                                            <label>Nama Obat</label>
                                            <input class="form-control" type="text" name="nm_obat" required>
                                            <label>Produsen</label>
                                            <input class="form-control" type="text" name="produsen" required>
                                            <label>Harga</label>
                                            <input class="form-control" type="number" name="harga" required>
                                            <label>Jumlah Stok</label>
                                            <input class="form-control" type="number" name="jml_stok" required>
                                            <label>Foto</label>
                                            <input class="form-control" type="text" name="foto" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url()?>index.php/Obat" class="btn btn-block btn-md btn-primary">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
</div>
                            <!-- /.row (nested) -->