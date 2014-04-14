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
              <input type="text" name="q" class="form-control" placeholder="Search items..."/>
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
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-bar-chart-o"></i>
                  <span>Items</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('Stocks', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-bar-chart-o"></i>
                  <span>Customers</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('List customers', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-bar-chart-o"></i>
                  <span>Suppliers</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('List Suppliers', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-bar-chart-o"></i>
                  <span>Settings</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('Configuration', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
                  <li><?php echo $UI->link('Bank account', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
                  <li><?php echo $UI->link('Invoice template', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
                  <li><?php echo $UI->link('Users', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
      </ul>
  </section>
  <!-- /.sidebar -->
</aside>