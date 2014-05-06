<?php $T->blockStart('content-header') ?>
    <h1>
        Main Page
        <small> Main start page</small>
    </h1>
<?php $T->blockEnd('content-header') ?>


<?php $T->blockStart('breadcrumb') ?>
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Index</li>
<?php $T->blockEnd('breadcrumb') ?>

<!-- Main content -->
<?php $T->blockStart('content') ?>
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body" style="min-height: 600px;">
                <?php echo $dt; ?>
            </div>
        </div>
    </div>
<?php $T->blockEnd('content') ?>


