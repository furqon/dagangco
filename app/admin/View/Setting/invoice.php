<?php $T->blockStart('content') ?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Settings
            <small>Konfigurasi warung</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <section class="content invoice">                    
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> #company name
                            <small class="pull-right">Date: <?php echo date("d/m/Y") ?></small>
                        </h2>                            
                    </div><!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong>#company name</strong><br>
                            Alamat company<br>
                            Phone: (804) 123-5432<br/>
                            Email: info@almasaeedstudio.com
                        </address>
                    </div><!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong>#client</strong><br>
                            alamat client<br>
                            Phone: (555) 539-1037<br/>
                            Email: john.doe@example.com
                        </address>
                    </div><!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Invoice #007612</b><br/>
                        <br/>
                        <b>Order ID:</b> 4F3S8J<br/>
                        <b>Payment Due:</b> 2/22/2014<br/>
                        <b>Account:</b> 968-34567
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Qty</th>
                                    <th>Product</th>
                                    <th>Serial #</th>
                                    <th>Description</th>
                                    <th>Subtotal</th>
                                </tr>                                    
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i < 2; $i++): ?>
                                <tr>
                                    <td>1</td>
                                    <td>Call of Duty</td>
                                    <td>455-981-221</td>
                                    <td>El snort testosterone trophy driving gloves handsome</td>
                                    <td>$64.50</td>
                                </tr>    
                                <?php endfor ?>                                
                            </tbody>
                        </table>                            
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-xs-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="../../img/credit/visa.png" alt="Visa"/>
                        <img src="../../img/credit/mastercard.png" alt="Mastercard"/>
                        <img src="../../img/credit/american-express.png" alt="American Express"/>
                        <img src="../../img/credit/paypal2.png" alt="Paypal"/>
                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                        </p>
                    </div><!-- /.col -->
                    <div class="col-xs-6">
                        <p class="lead">Amount Due 2/22/2014</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>$250.30</td>
                                </tr>
                                <tr>
                                    <th>Tax (9.3%)</th>
                                    <td>$10.34</td>
                                </tr>
                                <tr>
                                    <th>Shipping:</th>
                                    <td>$5.80</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>$265.24</td>
                                </tr>
                            </table>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-xs-12">
                        <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>  
                        <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                    </div>
                </div>
            </section>
     
        </div><!-- /.row -->
    </section><!-- /.content -->

</aside><!-- /.right-side -->

<?php $T->blockEnd('content') ?>
