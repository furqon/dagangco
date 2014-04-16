<?php $T->blockStart('content') ?>

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
            <div class="col-md-7">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php echo $form; ?>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="box box-primary">
                    <div class="box-body">
                        
                    </div>
                </div>
            </div>
     
        </div><!-- /.row -->
    </section><!-- /.content -->

</aside><!-- /.right-side -->

<?php $T->blockEnd('content') ?>