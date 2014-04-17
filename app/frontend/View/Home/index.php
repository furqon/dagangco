<?php $T->blockStart('content') ; ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
        <div class="box box-solid">
            <div class="box-body">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
                            <div class="carousel-caption">
                                First Slide
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
                            <div class="carousel-caption">
                                Second Slide
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
                            <div class="carousel-caption">
                                Third Slide
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <div class="col-md-4">
      <h2>Apa sih dagang.co?</h2>
      <p>
        <h4>
          <ul style="list-style-type:none;">
            <li># aplikasi kelola dagangan</li>
            <li># aplikasi kelola account</li>
          </ul>
        </h4>
      </p>
    </div>
  </div>

  <header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
      <div class="navbar-right">
        <ul class="nav navbar-nav">            
          <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>Pricing</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>About</span></a></li>
          <li><a href="#"><i class="glyphicon glyphicon-user"></i> <span>Contact</span></a></li>
        </ul>
      </div>
    </nav>
  </header>
</div>
<?php $T->blockEnd('content') ; ?>
