        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Supplier</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Supplier
                        </div>
                        <div class="panel-body">
                            <span class="pull-right">
                            <a href="<?php echo base_url() ?>index.php/Supplier/tambah">
                                <button class="btn btn-success btn-md" id="btn-add">Tambah Data</button>
                            </a>
                            <a href="<?php echo base_url() ?>index.php/Admin">
                                <button class="btn btn-primary btn-md" id="btn-todo">Kembali</button>
                            </a>
                            </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <?php
                                if (!empty($notif)) {
                                    echo '<div class="alert alert-danger">';
                                    echo $notif;
                                    echo '</div>';
                                }

                            ?>

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Supplier</th>
                                        <th>Nama Supplier</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($supplier as $data) {
                                        echo '
                                       
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data->KD_SUPPLIER.'</td>
                                            <td>'.$data->NAMA_SUPPLIER.'</td>
                                            <td>'.$data->ALAMAT.'</td>
                                            <td>'.$data->KOTA.'</td>
                                            <td>'.$data->TELP.'</td>
                                            <td>
                                            <a href="'.base_url().'index.php/Supplier/edit/'.$data->KD_SUPPLIER.'" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                            <a href="'.base_url().'index.php/Supplier/hapus/'.$data->KD_SUPPLIER.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus </a>
                                            </td>
                                        </tr>
                                        ';
                                        $no++;
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>