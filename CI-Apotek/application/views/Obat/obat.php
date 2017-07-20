        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Obat
                        </div>
                        <div class="panel-body">
                            <span class="pull-right">
                            <a href="<?php echo base_url() ?>index.php/Obat/tambah">
                                <button class="btn btn-success btn-md" id="btn-add">Tambah Data</button>
                            </a>
                            <a href="<?php echo base_url() ?>index.php/Admin">
                                <button class="btn btn-primary btn-md" id="btn-todo">Kembali</button>
                            </a>
                            </span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Kode Obat</th>
                                        <th>Kode Supplier</th>
                                        <th>Nama Obat</th>
                                        <th>Produsen</th>
                                        <th>Harga</th>
                                        <th>Jumlah Stok</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>11</td>
                                        <td>Obat Kuat</td>
                                        <td>Kawur</td>
                                        <td>10000</td>
                                        <td>50</td>
                                        <td>ini Foto</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-search"></i> Lihat</a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
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