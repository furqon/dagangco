<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Title
            <small>Title description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <!-- interactive chart -->
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Interactive Area Chart <?php echo $t ?></h3>
                        <div class="box-tools pull-right">
                            Real time
                            <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>                                            
                                <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="interactive" style="height: 300px;"></div>
                    </div><!-- /.box-body-->
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->

    </section><!-- /.content -->

</aside><!-- /.right-side -->