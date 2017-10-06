<div class="navbar-default sidebar" role="navigation" style="margin-top: 120px">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                <a href="{{ route ('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                <a href="{{ route ('class') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Class</a>
                <!-- /.nav-second-level -->
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->