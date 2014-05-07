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
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body" style="min-height: 600px;">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Umum</a></li>
                                <li><a href="#tab_2" data-toggle="tab">Bank account</a></li>
                                <li><a href="#tab_3" data-toggle="tab">Invoice</a></li>
                                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-cogs"></i></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1" style="min-height: 400px;">
                                    <p>
                                        <div class="col-md-6">
                            <!-- general form elements -->
                                            <div class="box box-primary">
                                        
                                                <form role="form">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Alamat email</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Nama warung</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama warung">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Mata uang</label>
                                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mata uang">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">Email footer</label>
                                                            <textarea class="form-control" rows="3" placeholder="Enter ...">Terima kasih, 
-- warung kopi
                                                            </textarea>
                                                        </div>
                                                    </div><!-- /.box-body -->

                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                            <!-- general form elements -->
                                            <div class="box box-primary">
                                        
                                                <form role="form">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Bank account</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bank">
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Account number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Facebook account</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Facebook account">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Twitter account</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Facebook account">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Instagram account</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Instagram account">
                                                        </div>
                                                    </div><!-- /.box-body -->

                                                </form>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                                <div class="tab-pane" id="tab_2">
                                    <p></p>
                                </div>
                                <div class="tab-pane" id="tab_3">
                                    <p></p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
     
        </div><!-- /.row -->
    </section><!-- /.content -->

</aside><!-- /.right-side -->

<?php $T->blockEnd('content') ?>
