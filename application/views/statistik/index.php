<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h2 class="page-title"><?= $title; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-8">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Statistik Blok</h4>

                        <canvas id="myChart" width="400" height="209"></canvas>


                    </div>
                </div><!-- end col-->

                <div class="col-lg-6 col-xl-4">
                    <div class="card-box">
                        <h4 class="header-title mb-3">Statistik Kluster</h4>

                        <canvas id="donat" width="400" height="200"></canvas>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list mb-0 mt-2">
                                <li class="list-inline-item">
                                    <h6 class="text-info"><i class="mdi mdi-circle-outline mr-1"></i>Total kluster : <?= $k1 + $k2 + $k3 + $k4; ?>
                                    </h6>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div><!-- end col-->
            </div>
            <!-- end row -->
        </div>
    </div>
</div>
</div>