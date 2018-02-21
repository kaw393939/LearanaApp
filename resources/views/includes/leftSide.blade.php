<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                          <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ route('course.create') }}"><i class="fa fa-book"></i> <span>Courses</span></a></li>
            <li><a href="{{ route('course.create') }}"><i class="fa fa-calendar"></i> <span>Sessions</span></a></li>
            <li><a href="{{ route('course.create') }}"><i class="fa fa-compass"></i> <span>Content</span></a></li>
            <li><a href="{{ route('course.create') }}"><i class="fa fa-dashboard"></i> <span>Insights</span></a></li>



            <li class="treeview">
                <a href="#"><i class="fa fa-gears"></i> <span>Manage</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('user.index') }}">People</a></li>
                    <li><a href="{{ route('course.index') }}">Courses</a></li>
                    <li><a href="{{ route('resource.index') }}">Resources</a></li>
                    <li><a href="{{ route('section.index') }}">Sessions</a></li>
                    <li><a href="#">Accounting</a></li>
                    <li><a href="#">Marketing</a></li>
                </ul>
            </li>



            <li class="treeview">
                <a href="#"><i class="fa fa-gear"></i> <span>Settings</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Integrations</a></li>
                    <li><a href="#">Payment</a></li>

                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>