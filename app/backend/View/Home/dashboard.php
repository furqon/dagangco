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
        <div class="row">
            <div class="col-md-6">
                <!-- Line chart -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Status penjualan harian</h3>
                    </div>
                    <div class="box-body">
                        <div id="line-chart" style="height: 300px;"></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->

                <!-- Area chart -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Profitability</h3>
                    </div>
                    <div class="box-body">
                        <div id="area-chart" style="height: 338px;" class="full-width-chart"></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->

            </div><!-- /.col -->

            <div class="col-md-6">
                <!-- Bar chart -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Item stock</h3>
                    </div>
                    <div class="box-body">
                        <div id="bar-chart" style="height: 300px;"></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->

                <!-- Donut chart -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Donut Chart - item terjual</h3>
                    </div>
                    <div class="box-body">
                        <div id="donut-chart" style="height: 300px;"></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->

</aside><!-- /.right-side -->
<?php $T->blockEnd('content') ?>

