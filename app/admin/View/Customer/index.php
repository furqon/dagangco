<?php $T->addJs(array('../res/datatables/extras/TableTools/media/js/TableTools','../res/datatables/extras/TableTools/media/js/ZeroClipboard')) ?>

<?php $T->blockStart('content') ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body" style="min-height: 600px;">
                    <p><?php echo $dt; ?></p>                    
                </div>
            </div>
        </div>
    </div>
<?php $T->blockEnd('content') ?>
