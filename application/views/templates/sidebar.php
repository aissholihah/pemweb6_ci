
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="<?php echo site_url('arsip_publikasi'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo site_url('user'); ?>">
            <i class="fa fa-user"></i> <span>User</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo site_url('artikel'); ?>">
            <i class="fa fa-book"></i> <span>Artichels</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo site_url('album'); ?>">
            <i class="fa fa-book"></i> <span>Albums</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo site_url('arsip_publikasi'); ?>">
            <i class="fa fa-book"></i> <span>Arsip Publikasi</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo site_url('administrator'); ?>">
            <i class="fa fa-user"></i> <span>Admin</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-sign-out"></i> <span>Log Out</span>
          </a>
        </li>
        <!-- end menu sidebar -->


        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
