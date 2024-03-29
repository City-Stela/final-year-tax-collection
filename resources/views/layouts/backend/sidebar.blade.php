<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Auth::user()->gravatar() }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li>
        <a href="{{ url('/home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pencil"></i>
          <span>News</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.blog.index') }}"><i class="fa fa-circle-o"></i> All Posts</a></li>
          <li><a href="{{ route('backend.blog.create') }}"><i class="fa fa-circle-o"></i> Add New</a></li>
        </ul>
      </li>
      @if (check_user_permissions(request(), "Categories@index"))
        <li><a href="{{ route('backend.categories.index') }}"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
      @endif
      @if (check_user_permissions(request(), "Users@index"))
        <li><a href="{{ route('backend.users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif
      <li class="treeview">
        <a href="#">
          <i class="fa fa-money"></i>
          <span>Taxation</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('backend.businesstypes.index') }}"><i class="fa fa-circle-o"></i>Business Types</a></li>
          <li><a href="{{ route('backend.managecustomers.index') }}"><i class="fa fa-circle-o"></i>Manage Customers</a></li>
          <li><a href="{{ route('backend.paymentmethods.index') }}"><i class="fa fa-circle-o"></i>Payment Methods</i></a></li>
          <li><a href="{{ route('backend.managepayments.index') }}"><i class="fa fa-circle-o"></i>Manage Payments</i></a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
