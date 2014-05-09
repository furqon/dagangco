<aside class="left-side sidebar-offcanvas">
  <section class="sidebar">
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
              <input type="text" name="q" class="form-control" placeholder="Search product..."/>
              <span class="input-group-btn">
                  <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
          </div>
      </form>
      
      <ul class="sidebar-menu">
          <li <?php echo ($active == '' || $active == 'dashboard') ? 'class="active"' : '' ?>><?php echo $UI->link('Dashboard', 'Home/dashboard', '', 'fa fa-dashboard') ?></li>
          <li <?php echo (isset($active) && $active == 'order') ? 'class="active"' : '' ?>><?php echo $UI->link('Order', 'Order/index', '', 'fa fa-dropbox') ?></li>
          <li class="treeview <?php echo (isset($active) && $active == 'product') ? 'active' : '' ?>">
              <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Products</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('List product', 'Product/index', '', 'fa fa-angle-double-right') ?></li>
                  <!-- <li><?php echo $UI->link('Product configuration', 'Warung/config', '', 'fa fa-angle-double-right') ?></li> -->
              </ul>
          </li>
          <li class="treeview <?php echo (isset($active) && $active == 'customer') ? 'active' : '' ?>">
              <a href="#">
                  <i class="fa fa-users"></i>
                  <span>Customers</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('List customers', 'Customer/index', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
          <li class="treeview <?php echo (isset($active) && $active == 'partner') ? 'active' : '' ?>">
              <a href="#">
                  <i class="fa fa-users"></i>
                  <span>Partners</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('Reseller', 'Partner/index', '', 'fa fa-angle-double-right') ?></li>
                  <li><?php echo $UI->link('Dropshippers', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
                  <li><?php echo $UI->link('List Suppliers', 'Warung/config', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
          <li class="treeview <?php echo (isset($active) && $active == 'socmed') ? 'active' : '' ?>">
              <a href="#">
                  <i class="fa fa-bullhorn"></i>
                  <span>Socmed Mgmt</span>
                  <i class="fa fa-angle-left pull-right"></i> <small class="badge pull-right bg-green">new</small>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('Account setting', 'Setting/socmed', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
          <li class="treeview <?php echo (isset($active) && $active == 'setting') ? 'active' : '' ?>">
              <a href="#">
                  <i class="fa fa-cogs"></i>
                  <span>Settings</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><?php echo $UI->link('Configuration', 'Setting/index', '', 'fa fa-angle-double-right') ?></li>
                  <li><?php echo $UI->link('Invoice', 'Setting/invoice', '', 'fa fa-angle-double-right') ?></li>
                  <li><?php echo $UI->link('Users', 'User/index', '', 'fa fa-angle-double-right') ?></li>
              </ul>
          </li>
      </ul>
  </section>
  <!-- /.sidebar -->
</aside>