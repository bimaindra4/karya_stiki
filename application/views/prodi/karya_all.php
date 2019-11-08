<?php echo $header ?>

<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>Data Karya</h1>
                </div>
                <div class="page-toolbar"></div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="#">Data Karya</a>
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
                                                <th>Pencipta</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $karya = (object) json_decode($karya);
                                                $no=1; foreach($karya as $row) { ?>
                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $row->prodi ?></td>
                                                    <td><?php echo $row->judul ?></td>
                                                    <td>
                                                        <?php 
                                                            $pencipta = "";
                                                            if(count($row->pencipta) == 0) {
                                                                $pencipta = "-";
                                                            } else {
                                                                foreach($row->pencipta as $rowp) {
                                                                    $pencipta .= $rowp->nama.", ";
                                                                }
    
                                                                $pencipta = rtrim($pencipta,", ");
                                                            }

                                                            echo $pencipta;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $row->tgl_buat ?></td>
                                                    <td>
                                                        <?php echo ($row->status == 0 ? "Belum di Verifikasi" : 
                                                        ($row->status == 1 ? "Terverifikasi" : "Status Tidak Diketahui")) ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo site_url('karya/detail/'.$row->_uid) ?>" class="btn btn-xs btn-info">Detail</a>
                                                        <a href="<?php echo site_url('karya/edit_karya/'.$row->_uid) ?>" class="btn btn-xs btn-warning">Edit</a>
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