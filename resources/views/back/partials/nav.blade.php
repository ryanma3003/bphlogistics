  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color: #fff;"><center>Navigation</center></li>
        <li class="active treeview">
          <a href="{{url('backscreen/')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('backscreen/blog_post/create')}}"><i class="fa fa-file"></i> New Post</a></li>
            <li><a href="{{url('backscreen/blog_post')}}"><i class="fa fa-database"></i> Table Post</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-tasks"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('backscreen/blog_categories/create')}}"><i class="fa fa-file-o"></i> New Category</a></li>
            <li><a href="{{url('backscreen/blog_categories')}}"><i class="fa fa-database"></i> Table Category</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-tag"></i> <span>Tag</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('backscreen/blog_tag/create')}}"><i class="fa fa-file-o"></i> New Tag</a></li>
            <li><a href="{{url('backscreen/blog_tag')}}"><i class="fa fa-database"></i> Table Tag</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-tags"></i> <span>Post Tag</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('backscreen/blog_post_tag/create')}}"><i class="fa fa-file-o"></i> New Post Tag</a></li>
            <li><a href="{{url('backscreen/blog_post_tag')}}"><i class="fa fa-database"></i> Table Post Tag</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-file-image-o"></i> <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('backscreen/galeri/create')}}"><i class="fa fa-file-o"></i> New Image</a></li>
            <li><a href="{{url('backscreen/galeri')}}"><i class="fa fa-database"></i> Table Image</a></li>
            <li><a href="{{url('backscreen/filter_galeri/create')}}"><i class="fa fa-tachometer"></i> New Filter</a></li>
            <li><a href="{{url('backscreen/filter_galeri')}}"><i class="fa fa-database"></i> Table Filter</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>