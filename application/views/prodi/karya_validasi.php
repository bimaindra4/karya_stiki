<?php echo $header ?>

<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>Validasi Karya</h1>
                </div>
                <div class="page-toolbar"></div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="#">Validasi Karya</a>
                        <i class="fa fa-circle"></i>
                    </li>
                </ul>
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-list"></i>
                                        <span class="caption-subject bold uppercase">Data</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Prodi</th>
                                                <th>Judul Karya</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no = 1;
                                                $karya = (object) json_decode($karya); 
                                                foreach($karya->data as $row) {    
                                            ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row->prodi ?></td>
                                                    <td><?php echo $row->karya_nama ?></td>
                                                    <td><?php echo $row->karya_tgl_buat ?></td>
                                                    <td>
                                                        <a href="<?php echo site_url('karya/validasi_karya/'.$row->id_karya_url) ?>" class="btn btn-xs btn-info">Validasi</a>
                                                    </td>
                                                </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $footer ?>