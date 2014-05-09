<?php $T->addJs(array('../res/datatables/extras/TableTools/media/js/TableTools','../res/datatables/extras/TableTools/media/js/ZeroClipboard')) ?>

<?php $T->blockStart('content') ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body" style="min-height: 600px;">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Daftar produk</a></li>
                            <li><a href="#tab_2" data-toggle="tab">Kategori produk</a></li>
                            <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1" style="min-height: 400px;">
                                <p><?php echo $dt; ?></p>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <p>
                                    <ul>
                                        <li>tree kategori</li>
                                        <li>menu crud</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $T->blockEnd('content') ?>
