<?php echo $header ?>

<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-head">
            <div class="container">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
                <div class="page-toolbar"></div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                </ul>
                <div class="page-content-inner">
                    <div class="row widget-row">
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                <h4 class="widget-thumb-heading">Prodi TI</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-blue icon-screen-desktop"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">Karya</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $karya_ti ?>">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                <h4 class="widget-thumb-heading">Prodi DKV</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-yellow-crusta icon-layers"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">Karya</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $karya_dkv ?>">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20">
                                <h4 class="widget-thumb-heading">Prodi SI</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-green-jungle icon-notebook"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">Karya</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $karya_si ?>">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                <h4 class="widget-thumb-heading">Prodi MI</h4>
                                <div class="widget-thumb-wrap">
                                    <i class="widget-thumb-icon bg-red-thunderbird icon-bar-chart"></i>
                                    <div class="widget-thumb-body">
                                        <span class="widget-thumb-subtitle">Karya</span>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $karya_mi ?>">0</span>
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