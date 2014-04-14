<aside class="left-side sidebar-offcanvas">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
          <div class="pull-left image">
              <img src="<?php echo $T->getResourceUrl('avatar/furqon.png') ?>" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
              <p>Hello, <?php if ($session->getUser()) echo $session->getUser()->getName() ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                  <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
          </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
          <li class="active">
            <?php echo $UI->link('Dashboard', 'Home/dashboard', '', 'fa fa-dashboard') ?>
          </li>
          <li>
            <?php echo $UI->link('Dashboard', 'Home/dashboard', '', 'fa fa-dashboard') ?>
              <a href="pages/widgets.html">
                  <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
              </a>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-bar-chart-o"></i>
                  <span>Charts</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                  <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                  <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
              </ul>
          </li>
      </ul>
  </section>
  <!-- /.sidebar -->
</aside>