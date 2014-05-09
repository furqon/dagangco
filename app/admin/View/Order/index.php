<?php $T->addJs(array('../res/datatables/extras/TableTools/media/js/TableTools','../res/datatables/extras/TableTools/media/js/ZeroClipboard')) ?>

<?php $T->blockStart('content') ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body" style="min-height: 600px;">
                    <br />- datatables buat list semua order
                    <br />- customize for pembuatan order
                    <br />- cari produk
                    <br />- add info kustomer
                    <br />- add unit yg mau dibeli
                    <br />- status (order, sudah dibayar, kirim)
                    <br />- metode pembayaran
                    <br />- bikin invoice
                    <br />
                    <?php echo $dt; ?>
                </div>
            </div>
        </div>     
    </div>
<?php $T->blockEnd('content') ?>