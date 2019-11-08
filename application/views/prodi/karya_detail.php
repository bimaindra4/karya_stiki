<?php echo $header ?>

<style>
    .prop-detail {
        font-weight: bold;
        width: 200px;
    }
</style>

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
                        <a href="<?php echo site_url('karya') ?>">Data Karya</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#">Detail Karya</a>
                        <i class="fa fa-circle"></i>
                    </li>
                    <li>
                        <a href="#"><?php echo $karya->judul ?></a>
                    </li>
                </ul>
                <div class="page-content-inner">
                    <div class="row">
                        <div class="col">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-grid"></i>
                                        <span class="caption-subject bold uppercase"><?php echo $karya->judul ?></span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img class="img-fluid" style="max-width: 100%" src="<?php echo base_url() ?>karya.jpg">
                                        </div>
                                        <div class="col-md-8">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <td class="prop-detail">Nama Karya</td>
                                                    <td><?php echo $karya->judul ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="prop-detail">Prodi</td>
                                                    <td><?php echo $karya->prodi ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="prop-detail">Kategori</td>
                                                    <td><?php echo $karya->kategori ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="prop-detail">Pencipta</td>
                                                    <td>
                                                        <?php 
                                                            $pencipta = "";
                                                            if(count($karya->pencipta) == 0) {
                                                                $pencipta = "-";
                                                            } else {
                                                                foreach($karya->pencipta as $row) {
                                                                    $pencipta .= $row->nama.", ";
                                                                }
    
                                                                $pencipta = rtrim($pencipta,", ");
                                                            }

                                                            echo $pencipta;
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="prop-detail">Tanggal Masuk</td>
                                                    <td><?php echo $karya->tanggal ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="prop-detail">Deskripsi</td>
                                                    <td><?php echo $karya->deskripsi ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="prop-detail">Produk HKI</td>
                                                    <td><?php echo ($karya->hki == 0 ? "Belum HKI" : "Sudah HKI") ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="prop-detail">Status Karya</td>
                                                    <td><?php echo $karya->status ?></td>
                                                </tr>
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
    </div>
</div>

<?php echo $footer ?>