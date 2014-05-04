<?php $T->addJs(array('https://www.google.com/jsapi', 'chart/pie')) ?>

<?php $T->blockStart('content') ?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Instant warung monitoring</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        New Orders
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Bounce Rate
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Unique Visitors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    
        <div class="row">
            
            <div class="col-md-3">
                <!-- Bar chart -->
                <div class="box box-info box-solid">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Socmed monitor</h3>
                    </div>
                    <div class="box-body">
                        <div id="line-chart1" style="height: 300px;">
                            liat follower, komentar, sales channel<br />
                            <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                            <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                            <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
                            <button class="btn bg-brown btn-circle"><i class="fa fa-instagram"></i></button>
                            <button class="btn bg-red btn-circle"><i class="fa fa-pinterest-square"></i></button>

                            <p></p>
                            go to timeline
                        </div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->

            </div><!-- /.col -->

            <div class="col-md-3">
                <!-- Bar chart -->
                <div class="box box-primary box-solid">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">transaksi hari ini</h3>
                    </div>
                    <div class="box-body">
                        <div id="line-chart2" style="height: 300px;"></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->

            </div><!-- /.col -->            

            <div class="col-md-6">
                <!-- Line chart -->
                <div class="box box-success box-solid">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Status penjualan harian</h3>
                    </div>
                    <div class="box-body">
                        <div id="line-chart3" style="height: 300px;"><div id="chart_div" style="width:400; height:300"></div></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->

            </div><!-- /.col -->

        </div><!-- /.row -->

    </section><!-- /.content -->

</aside><!-- /.right-side -->
<?php $T->blockEnd('content') ?>

